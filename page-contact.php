<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package multimotors
 */

/*
 Template Name: Contact
 */

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
  wpcf7_enqueue_scripts();
}

get_header(); ?>


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

          <div class="c-contact">

            <?php $upload_dir = wp_upload_dir(); ?>
            <img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/contactenos.jpg" alt="MultiMotors" title="MultiMotors" />

            <div class="c-contact__content">
              <h4>MultiMotors</h4>
              <p class="contact-address__info">Dirección: Perú 317<br>Teléfono: (11) 4342-1106 / 07<br>Horario de Atención: Lunes a viernes de 9 a 19hs<br>San Telmo, Cdad. Autónoma de Buenos Aires<br>(C1067AAG)</p>
            </div>

          </div>

          <div class="c-form">
            <h4>Envíenos su consulta</h4>
            <p>Todos los campos son obligatorios</p>
            <?php echo do_shortcode('[contact-form-7 id="2981" title="contacto"]'); ?>
          </div>

          <div class="c-map">
            <h4>Donde estamos</h4>
            <div class="c-map__content">
             <iframe width="570" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Multimotors&amp;aq=&amp;sll=-34.611418,-58.374782&amp;sspn=0.009943,0.021136&amp;gl=ar&amp;g=Per%C3%BA+317,+Buenos+Aires&amp;ie=UTF8&amp;t=m&amp;cid=2716201177699131389&amp;hq=Multimotors&amp;hnear=&amp;ll=-34.606297,-58.377142&amp;spn=0.013246,0.024462&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
           </div>
         </div>

        </div>
      </article><!-- #post-## -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
