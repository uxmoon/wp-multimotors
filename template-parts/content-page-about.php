<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package multimotors
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php mmotors_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php $upload_dir = wp_upload_dir(); ?>

		<div class="slider-about">
			<div>
				<img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/dealership-01.jpg" alt="<?php bloginfo( 'name' ); ?>" />
			</div>
			<div>
				<img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/dealership-02.jpg" alt="<?php bloginfo( 'name' ); ?>" />
			</div>
			<div>
				<img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/dealership-03.jpg" alt="<?php bloginfo( 'name' ); ?>" />
			</div>
			<div>
				<img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/dealership-04.jpg" alt="<?php bloginfo( 'name' ); ?>" />
			</div>
			<div>
				<img src="<?php echo $upload_dir['baseurl']; ?>/2012/10/dealership-05.jpg" alt="<?php bloginfo( 'name' ); ?>" />
			</div>
		</div>

		<h2>Confianza, Calidad y Seguridad</h2>

		<div class="about-us">
			<div class="about-us__item">
				<p>Somos una empresa familiar, que desde el año 1992 se dedica a la comercialización de autos usados de las mejores marcas.</p>
				<p>Desde el comienzo nos hemos dedicado a la importación de automóviles segun las necesidades de nuestro mercado.</p>
			</div>
			<div class="about-us__item">
				<p>Nos caracterizamos por la calidez en nuestra atención y la tranquilidad que le brindamos a nuestros clientes, con un respaldo de mas de 20 años en el rubro automotor.</p>
				<p>Porque lo más importante que tenemos son nuestros clientes.</p>
			</div>
			<div class="about-us__item">
				<p>Estamos para ofrecerle una agradable experiencia en la compra de su nuevo automóvil.</p>
				<p>Hemos crecido pese a las embates de nuestro país, fortaleciéndonos más aún. También hemos ingresado al mundo Internet, para ofrecerle nuevas alternativas de compra, para que cómodamente desde su lugar pueda ver nuestros productos e detalle.</p>
			</div>
		</div>

		<div class="about-us__info">
			<div class="about-us__item">
				<h4>Autos Usados</h4>
				<p>En MultiMotors además contamos con una amplia gama de vehículos usados, especialmente seleccionados, con el objetivo de complacer sus expectativas.</p>
				<p><a href="<?php echo bloginfo('url') ?>/autos-usados/" title="Ver autos usados">Ver autos usados &raquo;</a></p>
			</div>
			<div class="about-us__item">
				<h4 id="vender">Venda su Auto</h4>
				<p>Tenemos amplio conocimiento del mercado y una diversa cartera de clientes, para poder vender su auto usado de la forma mas rápida y segura.</p>
				<p><a href="<?php echo bloginfo('url') ?>/contactenos/" title="Contáctenos">Contáctenos  &raquo;</a></p>
			</div>
			<div class="about-us__item">
				<h4 id="autosNuevos">Autos Nuevos</h4>
				<p>Nos dedicamos a la búsqueda de los mejores vehículos de las marcas líderes. No dude en consultarnos por la unidad que usted desea. A la brevedad estará recibiendo nuestro asesoramiento profesional.</p>
				<p><a href="<?php echo bloginfo('url') ?>/contactenos/" title="Contáctenos">Contáctenos &raquo;</a></p>
			</div>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
