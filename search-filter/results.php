<?php if ( $query->have_posts() ) { ?>

<?php
  if( is_page( 'autos-usados' ) ) {
    $mmotors_marca = 'marca';
  } elseif ( is_page( 'autos-clasicos' ) ) {
    $mmotors_marca = 'marcasclasicos';
  } elseif ( is_page( 'motos-usadas' ) ) {
    $mmotors_marca = 'marcasmotos';
  }
?>


<?php while ($query->have_posts()) { $query->the_post(); ?>
  <div class="c-search__results-item">
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' ); } ?>
      <span class="list-item__info">

        <?php
        // http://wordpress.stackexchange.com/questions/88953/display-current-taxonomy-term-when-inside-custom-post-type
        global $post;
        // Get terms for post
        $terms = get_the_terms( $post->ID , $mmotors_marca );
        // Loop over each item since it's an array
        if ( $terms != null ){
          foreach( $terms as $term ) {
            $term_link = get_term_link( $term, $mmotors_marca );
            // Print the name and URL
            echo '<span itemprop="brand">' . $term->name . '</span>';
            // Get rid of the other data stored in the object, since it's not needed
            unset($term);
          }
        } ?>

        <?php echo '<span itemprop="model">' . rwmb_meta('cf_automodelo') . '</span>' ; ?>
        <br>(<?php echo rwmb_meta('cf_autoyear'); ?>)
        <meta itemprop="condition" content="used" />
        <?php echo '<span class="list-item__miles">' . rwmb_meta('cf_autokm') . '</span> Km.'; ?>
      </span>
    </a>
  </div>
<?php } ?>

<div class="pagination">
  <?php if (function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $query ) ); } ?>
</div>

<?php } else { echo "No hay resultados."; } ?>