<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package multimotors
*/

$upload_dir = wp_upload_dir();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<div class="carousel-home">
      <?php
        $args = array(
          'showposts' => '5',
          'post_type' => 'autousado',
        );
        $the_query = new WP_Query( $args );
      ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="carousel-home__item">
					<?php the_title('<div class="carousel-home__title">', '</div>'); ?>

					<?php if ( has_post_thumbnail() ) : ?>

					<a href="<?php the_permalink(); ?>" alt="alt">
					  <?php the_post_thumbnail( 'full' ); ?>

					</a>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div><!-- .carousel-home -->

		<div class="text-intro">
			<p>Desde 1992 nos especializamos en la venta de autos premium, siempre en familia.</p>
		</div><!-- .text-intro -->

		<!--<div class="text-featured">
			<p>Nuestros autos estuvieron presentes en el programa de Escala Clásica, <a href="/escala-clasica/" title="Mira los vídeos">mira los vídeos</a>.</p>
		</div> .text-featured -->

		<div class="about-us">
			<div class="about-us__item">
				<h3>Sobre Nosotros</h3>
				<a href="/sobre-nosotros/#multimotors" title="Seguir leyendo"><img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/home_about.jpg" alt="Sobre Nosotros" title="Sobre Nosotros" /></a>
				<p>Nos caracterizamos por la calidez en nuestra atención y la tranquilidad que le brindamos a nuestros clientes. <br /> <a href="/sobre-nosotros/#aboutus" title="Seguir leyendo">Seguir leyendo &#187;</a></p>
			</div>

			<div class="about-us__item">
				<h3>Venda su auto</h3>
				<a href="/sobre-nosotros/#vender" title="Conozca más"><img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/home_sell.jpg" alt="Autos Vendidos" title="Autos Vendidos" /></a>
				<p>Cuente con nuestra experiencia y asesoramiento para vender su auto a través de MultiMotors. <br /> <a href="/sobre-nosotros/#vender" title="Conozca más">Conozca más &#187;</a></p>
			</div>

			<!-- <div class="about-us__item">
				<h3>Autos vendidos</h3>
				<a href="/autos-vendidos/" title="Autos Vendidos"><img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/home_sold.jpg" alt="Autos vendidos" title="Autos vendidos" /></a>
				<p>Conozca nuestro historial de autos usados vendidos en MultiMotors.<br /> <a href="/autos-vendidos/" title="Ver autos usados vendidos">Ver autos usados vendidos &#187;</a></p>
			</div> -->
		</div><!-- .about-us -->
	</div>
</article><!-- #post-## -->
