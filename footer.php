<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package multimotors
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">


		<?php
			wp_nav_menu( array(
			'container_class' => 'c-anchor-nav',
			'theme_location'  => 'secondary' )
			);
		?>

		<div class="site-info">Copyright &copy; <?php echo date('Y'); ?> MultiMotors</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7446033-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
