<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sup\'Biotech_Blog
 */

?>

	</section><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'supbiotech-blog' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'supbiotech-blog' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'supbiotech-blog' ), 'supbiotech-blog', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div> .site-info -->
		<div class="col-lg-12 propos">
            <div class="container">
                <!--<div class="col-md-5 apropos rel">-->

                <?php  
                // create id attribute for specific styling
                    //$id = 'a_propos_' . $block['id'];

                    // create align class ("alignwide") from block setting ("wide")
                   // $align_class = $block['align'] ? 'align' . $block['align'] : '';
                
                ?>

<!-- appel le widget Footer  "à propos" dans le Footer -->
                    <?php
                        if(is_active_sidebar('footer-1')) : ?>                            
                                
                                    <?php dynamic_sidebar('footer-1'); ?>
                                                            
                        <?php endif; 
                        ?>


                    <!--<h3>--><?php echo the_field('titre_a_propos'); ?> <!--A propos--><!--</h3>-->
                    <!--<p>--><?php //the_field('texte_a_propos'); ?><!--Sup'Biotech est une <a href="/ecole-ingenieurs-biotechnologies/presentation">école d'ingénieur spécialisée en biotechnologies à Paris et à Lyon,</a> proche du monde de la <a href="/recherche-biotechnologie/presentation-laboratoires">Recherche</a> comme du monde de l'<a href="/entreprise-ecole-ingenieurs/formation-insertion-professionnelle">Entreprise</a>, qui propose une <a href="/formation-ingenieur-biologie/cursus/presentation">formation innovante en 5 ans après le bac</a>. Ce cursus permet aux étudiants d'accéder rapidement à des postes à responsabilités, en France comme à l'<a href="/international-ecole-biologie/etudes-international">International</a>, dans les secteurs très porteurs de la <a href="/debouches-metier-biologie/secteurs/carriere-sante">santé et la pharmacie</a>, de <a href="/debouches-metier-biologie/secteurs/carriere-agroalimentaire">l’innovation agroalimentaire</a>, de la <a href="/debouches-metier-biologie/secteurs/carriere-cosmetique">cosmétique</a>, de la <a href="/recherche-biotechnologie/laboratoire-birl-bioinformatique">bio-informatique</a> ou encore de l'<a href="/debouches-metier-biologie/secteurs/carriere-environnement">environnement</a>. Les études, combinant fondamentaux académiques, <a href="/formation-ingenieur-biologie/projets-etudiants">projets étudiants</a> et <a href="/entreprise-ecole-ingenieurs/recherche-stagiaire">stages en entreprise</a>, sont découpées en deux parties selon la norme européenne : le cycle <a href="/formation-ingenieur-biologie/cursus/bachelor1">Bachelor of Biotechnology (3 ans)</a> et le cycle <a href="/formation-ingenieur-biologie/cursus/master1">Expertise</a> (2 ans). La formation des ingénieurs en biotechnologies de Sup'Biotech est <a href="/ecole-ingenieurs-biotechnologies/partenaires-academiques-label">labellisée par Medicen Paris Région et Industries and Agro-Ressources (I.A.R.)</a>. <br /> Sup’Biotech propose également une <a href="https://www.supbiotech.fr/formation-ingenieur-biologie/cursus/apprentissage">filière apprentissage</a> à partir de bac+3, ainsi qu’une formation Bachelor en Biotechnologies, accessible après le bac. Sup’Biotech est un établissement d’enseignement supérieur privé habilité à délivrer le <a href="/debouches-metier-biologie/remise-diplomes">titre d’ingénieur</a> et reconnu par l’État (arrêté du 15/12/14 et B.O du 08/01/15).</p>-->
               
                        

                <!--</div>-->
				
				<div class="col-md-3 logo-cti">

                    <ul>
                        <li><img src="https://www.supbiotech.fr/Content/images/design/cti-logo.jpg" alt="logo CTI" /></li>
                        <li class="iar"><img src="https://www.supbiotech.fr/Content/images/design/logo-iar.png" width="100" alt="logo IAR" /></li>
                    </ul>
                    

                    
                </div>
                <div class="col-md-4 info-pratique">
                    <h3>Infos pratiques</h3>
                    <ul>
                        <!--<li><a href="https://www.supbiotech.fr/contact">Contact</a></li>
                        <li><a href="https://newsroom.ionis-group.com/sup-biotech/" target="_blank">Newsroom</a></li>
                        <li><a href="https://newsroom.ionis-group.com/revue-de-presse/revue-de-presse-ecole-sup-biotech/" target="_blank">Revue de Presse</a></li>
                        <li><a href="https://www.supbiotech.fr/plan-site">Plan du site</a></li>
                        <li><a href="https://www.supbiotech.fr/mentions-legales")>Mentions légales</a></li>
                        <li><a href="#" onclick="window.Sddan.cmp.displayUI(); return false;">Politique de cookies</a></li>
						<li><a href="https://www.supbiotech.fr/politique-confidentialite">Politique de confidentialité</a></li>
						<li><a href="https://www.supbiotech.fr/cgv-conditions-generales-vente">C.G.V</a></li>
                        <li><a href="https://www.supbiotech.fr/ecole-ingenieurs-biotechnologies/agenda">Agenda</a></li>-->
                        <?php
								 wp_nav_menu ( array (
								 'theme_location' => 'menu-footer' ,
								//'walker' => new SupBio_Footer_Walker(),
								'container' => '',
								 'menu_class' => 'menu', 
								 ) );
                                 
                            ?>


<?php
/*
wp_nav_menu( array( 
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
    'container' => 'div',
    'container_class' => '_cbp-hrsub',
    //'container_id' => 'eeee',
    'menu_class' => 'menu',
    //'menu_id' => 'zzzz',
    //'items_wrap'      => '<ul class="main">%3$s</ul>',
    'walker'          => new My_Walker_Nav_Menu()
) );
*/
?>
                    </ul>
					<div class="logo-reseaux">
                        <a class="facebook" href="https://www.facebook.com/supbiotech"></a>
                        <a class="twitter" href="https://twitter.com/supbiotech"></a>
                        <a class="youtube" href="https://www.youtube.com/user/supbiotech"></a>
                        <a class="insta" href="https://www.instagram.com/supbiotech/"></a>
                        <a class="linkedin" href="https://www.linkedin.com/edu/sup'biotech-%C3%A9cole-de-biotechnologies-43565"></a>
                    </div>
                </div>
            </div>
        </div><div class="clearfix"></div>
        <div class="col-md-12 infos">  
            <div class="container">
            <h3>Venez nous rencontrer</h3>  
			    <div class="col-md-6 rencontre">
				
				    <div class="jpoDisplay">					      

                        <div class="bloc-left">
                            <div class="displayParisFooter">
                            <?php echo do_shortcode('[eventdb id="1373"]'); ?>
                            
                                <!--<br />
                                <p><span>Inscription obligatoire</span></p>
                                <h4>Campus de Paris</h4>
                                <p>Biotech day</p>
                                <div class="date">Le 22/05/2021</div>
                                <div class="btn-plus"><a href="">S'inscrire</a></div>
                                <br />
                                <br />
                                <p><span>Inscription obligatoire</span></p>-->
                            </div>
                        </div>

                        <div class="bloc-right">
                            <div class="displayLyonFooter">
                            <?php echo do_shortcode('[eventdb id="1374"]'); ?>
                           
                            <!--<h4>Campus de Lyon</h4>
                                <p>Journée Portes Ouvertes</p>
                                <div class="date">Le 29/05/2021</div>
                                <div class="btn-plus"><a href="">S'inscrire</a></div>
                                <br />
                                <br />
                                <p><span>Inscription obligatoire</span></p>-->
                            </div>
                        </div>

                    </div>              
                </div>

                <div class="col-md-6 vousetes">
                    <div class="inner">                   
                        <a class="documentation" href="https://www.supbiotech.fr/admission-ecole-ingenieur/documentation">
                            Documentation
                        </a>
                        <a class="candidature" href="https://www.supbiotech.fr/admission-ecole-ingenieur/candidature">
                            Candidature
                        </a>
                        <a class="agenda" href="https://www.supbiotech.fr/admission-ecole-ingenieur/candidature">
                            Agenda
                        </a>
                        <a class="rdvperso" href="https://www.supbiotech.fr/contact">
                            RDV<br />personnalisé
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            
        </div>
        <!-- <div class="col-md-12 contactklik">
        	<h3>Nous contacter en 1 clic</h3>
        	<div class="contact-clic">
        		<a class="documentation" href="#">
        			Documentation
        		</a>
        		<a class="candidature" href="#">
        			Candidature
        		</a>
        		<a class="contacts" href="#">
        			Contacts
        		</a>
        	</div>
        </div> -->
    </footer><!-- #colophon -->
    <div class="container ecoles">
        <div class="speHover">
            Établissement privé d'enseignement supérieur technique - Inscription au rectorat de Créteil - IPSA est membre de <a class="firstLineFooter" href="http://www.ionis-group.com" rel="nofollow" title="enseignement supérieur privé" target="_blank">IONIS Education Group</a> comme :<br><br>
            <!--<ul class=""><li><a href="http://www.isg.fr" title="ecole commerce paris" target="_blank">ISG</a> - </li><li><a href="http://www.modadomani.fr" title="business school" target="_blank">Moda Domani Institute</a> - </li><li><a href="http://bfs.iseg.fr" title="ecole de commerce" target="_blank">ISEG Business &amp; Finance School</a> - </li><li><a href="http://mcs.iseg.fr" title="ecole de communication, ecole de marketing, ecole de publicite" target="_blank">ISEG Marketing &amp; Communication School</a> - </li><li><a href="http://www.isth.fr" title="prepa sciences po hec" target="_blank">ISTH</a> - </li><li><a href="http://www.ics-begue.com" title="école expert finance" target="_blank">ICS Bégué</a> - </li><li><a href="http://www.initial-isefac.com" title="bachelor commerce communication" target="_blank">ISEFAC Bachelor</a> - </li><li><a href="http://www.isefac-rh.fr" title="" target="_blank">ISEFAC R.H.</a></li></ul><ul class=""><li><a href="http://www.epita.fr" title="école ingénieur informatique" target="_blank">EPITA</a> - </li><li><a href="http://www.esme.fr" title="ecole ingenieur" target="_blank">ESME Sudria</a> - </li><li><a href="http://www.epitech.eu" title="ecole informatique" target="_blank">Epitech</a> - </li><li><a href="http://webacademie.org/" title="" target="_blank">Web@cadémie</a> - </li><li><a href="http://www.supbiotech.fr" title="ecole biotechnologie" target="_blank">Sup'Biotech</a> - </li><li><a href="http://www.e-artsup.net" title="ecole multimedia" target="_blank">e-artsup</a> - </li><li><a href="http://www.ionis-stm.com" title="mastere post master management finance informatique" target="_blank">Ionis-STM</a> - </li><li><a href="http://www.supinternet.fr" title="ecole internet" target="_blank">SUP'Internet</a></li></ul><ul class=""><li><a href="http://www.isefac-alternance.fr" title="bts alternance paris" target="_blank">ISEFAC Alternance</a> - </li><li><a href="http://www.etna-alternance.net" title="informatique alternance" target="_blank">ETNA</a> - </li><li><a href="http://www.ionis-up.fr" title="" target="_blank">IONIS UP</a> - </li><li><a href="http://www.coding-academy.fr" title="" target="_blank">Coding Academy</a> - </li><li><a href="http://www.ionisx.com" title="" target="_blank">IONISx</a> - </li><li><a href="http://www.ionis361.com" title="" target="_blank">IONIS 361</a></li></ul>-->
        </div>
    </div>
</div><!-- #page -->
	<?php wp_footer(); ?>
    <script src="/js/main.js"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            $(".fancybox").fancybox();
        });
    </script>
</body>
</html>
