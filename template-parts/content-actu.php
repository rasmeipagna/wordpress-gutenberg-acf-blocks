<article class="col-xs-12 col-sm-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="">
		<div class="content-article">
			<figure class="col-sm-6">
				<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
					<?php 

					if( has_post_thumbnail() ) {
						the_post_thumbnail("widget-actu");
						} else {
  
 ?>
              <?php if(has_category( 'actu-technologique' )){ ?>
              <img alt="Actu Technologique" src="/wp-content/themes/supbiotech-theme/images/media/cat/actutechnologique.jpg"/>
              <?php } elseif(has_category( 'entreprise' )) { ?>
              <img alt="Événements" src="/wp-content/themes/supbiotech-theme/images/media/cat/entreprise.jpg"/>
              <?php } elseif(has_category( 'evenements' )) { ?>
              <img alt="L'actu par les élèves" src="/wp-content/themes/supbiotech-theme/images/media/cat/evenements.jpg"/>
              <?php } elseif(has_category( 'lactu-biotech-par-les-eleves' )) { ?>
              <img alt="Mission to Mars" src="/wp-content/themes/supbiotech-theme/images/media/cat/actubiotecheleves.jpg"/>
              <?php } elseif(has_category( 'mission-to-mars' )) { ?>
              <img alt="Non classé" src="/wp-content/themes/supbiotech-theme/images/media/cat/missiontomars.jpg"/>
              <?php } elseif(has_category( 'non-classe' )) { ?>
              <img alt="Nous rencontrer" src="/wp-content/themes/supbiotech-theme/images/media/cat/actu-hp.jpg"/>
              <?php } elseif(has_category( 'nous-rencontrer' )) { ?>
              <img alt="Pédagogie" src="/wp-content/themes/supbiotech-theme/images/media/cat/nousrencontrer.jpg"/>
              <?php } elseif(has_category( 'pedagogie' )) { ?>
              <img alt="Portraits d'anciens" src="/wp-content/themes/supbiotech-theme/images/media/cat/pedagogie.jpg"/>
              <?php } elseif(has_category( 'portraits-danciens' )) { ?>
              <img alt="Projets et recherche" src="/wp-content/themes/supbiotech-theme/images/media/cat/portraitsanciens.jpg"/>
              <?php } elseif(has_category( 'projets-et-recherche' )) { ?>
              <img alt="Vie étudiante" src="/wp-content/themes/supbiotech-theme/images/media/cat/projetsrecherche.jpg"/>
              <?php } elseif(has_category( 'vie-etudiante' )) { ?>
              	<img alt="Vie étudiante" src="/wp-content/themes/supbiotech-theme/images/media/cat/vieetudiante.jpg"/>
                    <?php } ?>
        <?php } 
             
          ?>
				</a>
			</figure>

		</div>
		
<div class="titre-actu col-sm-6 col-xs-12">
		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_title(); ?></a>
    </div>
		</div><!-- .entry-content -->

	
</article>