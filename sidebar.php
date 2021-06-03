<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sup\'Biotech_Blog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="col-md-4 widgets">


	<div class="widget widget-bloc-color">
		<div class="col-sm-12">
			<a href="/admissions-ecole-ingenieur/documentation" class="green-bloc">Documentation</a>
		</div>
		<div class="col-sm-12">
			<a href="/admissions-ecole-ingenieur/candidature" class="mint-bloc">Candidature</a>
		</div>
<!-- 		<div class="col-sm-12">
			<a href="" class="blue-bloc">Demande d'entretien</a>
		</div>
 -->		<div class="col-sm-12">
			<a href="/contact" class="orange-bloc">Contacts</a>
		</div>
		

	</div>


	<?php dynamic_sidebar( 'sidebar-1' ); ?>



	
	<div class="widget actualites col-sm-12">
		<p class="h2">Suivez-nous</p>
		<ul class="social">
			<li class="facebook">
				<a target="_blank" href="https://www.facebook.com/supbiotech"></a>
			</li>
			<li class="twitter">
				<a target="_blank" href="https://twitter.com/supbiotech"></a>
			</li>
			<li class="linkedin">
				<a target="_blank" href="https://www.linkedin.com/edu/sup'biotech-%C3%A9cole-de-biotechnologies-43565"></a>
			</li>
			<li class="youtube">
				<a target="_blank" href="https://www.youtube.com/user/supbiotech?&ab_channel=supbiotech"></a>
			</li>
			<li class="instagram">
            <a target="_blank" href="https://www.instagram.com/supbiotech/"></a>
        </li>
        <li class="snapchat">
            <a target="_blank" href="https://www.snapchat.com/add/supbiotech"></a>
        </li>
		</ul>
	</div>
	
</aside><!-- #secondary -->

