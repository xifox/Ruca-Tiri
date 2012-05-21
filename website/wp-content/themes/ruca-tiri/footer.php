<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

			<div class="telefono">	
				<span> Tel&eacute;fono </span>
				<img class="mujer" src="<?php bloginfo( 'template_url' ); ?>/images/mujer.png" title="Contacto" alt="Contacto" />
				<span> 4778030 </span>
			</div>
			
			<div id="puntitos"></div>
							
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					//get_sidebar( 'footer' );
			?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>