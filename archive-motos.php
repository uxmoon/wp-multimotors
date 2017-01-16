<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package multimotors
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <header class="page-header">
        <h1 class="entry-title"><?php esc_html_e( 'Motos usadas', 'mmotors' ); ?></h1>
      </header><!-- .page-header -->

      <div class="entry-content">

        <div class="c-search__sidebar">
          <?php echo do_shortcode('[searchandfilter id="4038"]'); ?>
        </div>

        <div class="c-search__results">

          <div class="item-container">

          <?php if ( have_posts() ) : ?>

          <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
          ?>

          <div class="item">
            <a href="<?php the_permalink()?>">

              <?php the_post_thumbnail('thumbnail'); ?>

              <div class="item-details">
                <?php
                  // brand
                  global $post;
                  $terms = wp_get_post_terms( $post->ID, 'marcasmotos');
                  foreach( $terms as $term ) {
                    echo '<span itemprop="brand">' . $term->name . '</span>';
                    unset($term);
                  }

                  // model
                  echo ' <span itemprop="model">' . rwmb_meta('cf_automodelo') . '</span>';
                  echo '<br>(' . rwmb_meta('cf_autoyear') . ')';

                ?>
                <meta itemprop="condition" content="used" />
                <?php echo '<span class="list-item__miles">' . rwmb_meta('cf_autokm') . '</span> Km.'; ?>
              </div>
            </a>
          </div>

          <?php endwhile; ?>

          </div>

          <?php

            wp_pagenavi();

            else :

            get_template_part( 'template-parts/content', 'none' );

          endif; ?>
        </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
