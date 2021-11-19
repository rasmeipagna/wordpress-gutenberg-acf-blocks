<?php
/**
 * The template for displaying 404 pages (not found)
 * Author : Pagna Toung
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sup\'Biotech_Blog
 */

get_header(); ?>

<section class="container page">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Page introuvable', 'supbiotech-blog' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'La page que vous avez demandée est introuvable ou n&#146;existe pas.', 'supbiotech-blog' ); ?></p>

					<p><?php esc_html_e( 'Pour retrouver votre chemin, consultez le', 'supbiotech-blog'  ); ?> <a href="/plan-de-site/"><?php esc_html_e( 'plan du site', 'supbiotech-blog' ); ?></a> <?php esc_html_e( 'ou revenez sur l&#146;', 'supbiotech-blog' ); ?><a href="/"><?php esc_html_e( 'accueil', 'supbiotech-blog' ); ?></a><?php esc_html_e( '.', 'supbiotech-blog' ); ?></p>

					

					


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
