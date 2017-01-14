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
 Template Name: Search and Filter
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

          <!-- sidebar -->
          <div class="c-search__sidebar">
            <?php
              if( is_page( 'autos-usados' ) ) {
                echo do_shortcode( '[searchandfilter id="4033"]' );
              } elseif ( is_page( 'autos-clasicos' ) ) {
                echo do_shortcode( '[searchandfilter id="4037"]' );
              } elseif ( is_page( 'motos-usadas' ) ) {
                echo do_shortcode( '[searchandfilter id="4038"]' );
              }
            ?>
          </div>

          <!-- content -->
          <div class="c-search__results">
          <?php
            if( is_page( 'autos-usados' ) ) {
              echo do_shortcode( '[searchandfilter id="4033" show="results"]' );
            } elseif ( is_page( 'autos-clasicos' ) ) {
              echo do_shortcode( '[searchandfilter id="4037" show="results"]' );
            } elseif ( is_page( 'motos-usadas' ) ) {
              echo do_shortcode( '[searchandfilter id="4038" show="results"]' );
            }
          ?>
          </div>
        </div><!-- .entry-content -->
      </article>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
