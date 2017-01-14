<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package multimotors
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <h1 class="entry-title">
      <?php
      // http://wordpress.stackexchange.com/questions/88953/display-current-taxonomy-term-when-inside-custom-post-type
      global $post;
      // Get terms for post
      $terms = get_the_terms( $post->ID , 'marca' );
      // Loop over each item since it's an array
      if ( $terms != null ){
        foreach( $terms as $term ) {
          $term_link = get_term_link( $term, 'marca' );
          // Print the name and URL
          echo $term->name;
          // Get rid of the other data stored in the object, since it's not needed
          unset($term);
        }
      } ?>
      <?php echo rwmb_meta( 'cf_automodelo' ); ?>
      (<?php echo rwmb_meta( 'cf_autoyear' ); ?>)
    </h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <div class="carousel-single">
      <?php
        $args = array(
          'post_type'   => 'attachment',
          'numberposts' => -1,
          'post_status' => null,
          'post_parent' => $post->ID,
          'order'       => 'ASC',
          'exclude'     => get_post_thumbnail_id()
          );

        $attachments = get_posts( $args );
        if ( $attachments ) {
          foreach ( $attachments as $attachment ) {
            echo '
            <div><img src="'
            . wp_get_attachment_url( $attachment->ID, 'full' )
            . '" /></div>';
          }
        }
      ?>
    </div><!-- .carousel-single -->

    <?php if ( rwmb_meta('cf_is_sell') === 'si' ) { ?>
     <span class="ribbon">Vendido</span>
    <?php } ?>

    <div class="c-details">

      <ul class="c-details__list">
        <li>Marca:
          <?php
          // http://wordpress.stackexchange.com/questions/88953/display-current-taxonomy-term-when-inside-custom-post-type
          global $post;
          // Get terms for post
          $terms = get_the_terms( $post->ID , 'marca' );
          // Loop over each item since it's an array
          if ( $terms != null ){
            foreach( $terms as $term ) {
              $term_link = get_term_link( $term, 'marca' );
              // Print the name and URL
              echo $term->name;
              // Get rid of the other data stored in the object, since it's not needed
              unset($term);
            }
          } ?></li>
        <li>Modelo: <?php echo rwmb_meta('cf_automodelo'); ?></li>
        <li>Año: <?php echo rwmb_meta('cf_autoyear'); ?></li>
        <li>Color: <?php echo rwmb_meta('cf_autocolor'); ?></li>
        <li>Kilometraje: <?php echo rwmb_meta('cf_autokm'); ?></li>
        <li>Información adicional: <?php echo rwmb_meta('cf_autoinfo'); ?></li>
      </ul>

      <?php if ( rwmb_meta('cf_is_sell') === 'no' ) { ?>
        <div class="c-details__form">
          <h3>Envíenos su consulta</h3>
          <?php echo do_shortcode('[contact-form-7 id="2980" title="consulta modelo"]'); ?>
        </div>
      <?php } ?>

    </div><!-- .c-details -->
  </div><!-- .entry-content -->


</article><!-- #post-## -->