jQuery(function($) {
console.log("load js");
let url = window.location.href;
console.log(url);
var paris = 'paris';
var lyon ="lyon";
setTimeout(function(){ 
    if(url.includes('#'+ lyon)){
        $('#lyon').addClass('active');
        $('#paris').removeClass('active');
        $('.call-paris').removeClass('active');
        $('.call-lyon').addClass('active');
        console.log('removeClass on paris et add on lyon');
      };
        }, 10);
});
