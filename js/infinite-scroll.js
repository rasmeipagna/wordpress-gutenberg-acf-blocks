var offset = 5;

$(document).ready(function() {
	$('.afficher-plus').click(function () {
		var date = $(this).data('date');
		var tmp_date = "";
		if (date != undefined) {
			tmp_date = date.split('|');
			var year = tmp_date[1];
			var monthnum = tmp_date[0];
		}

		var category_name = $(this).data('category');

		if ((category_name != undefined || date != undefined) && offset == 5)
			offset = 10;

		jQuery.post(
			ajaxurl,
			{
				'action': 'ajax_last_posts',
				'offset': offset,
				'category_name' : category_name,
				'year' : year,
				'monthnum' : monthnum
			},
			function(response){
				offset = offset + 4;
				$('.append-articles').append(response);
				$('.moreContent').hide();
                $('.afficher-plus').show();

                if (response == "") {
                	$('.moreContent').html("<center>Il n'y a pas d'autres actualités !</center>");
                	$('.afficher-plus-category').hide();
                }
			}
		);

		return false;
	});

});