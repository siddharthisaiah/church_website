<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Faith
 */

$ilovewp_logo = get_template_directory_uri() . '/images/ilovewp-logo-white.png';

?>

	<footer class="site-footer" role="contentinfo">
	
		<?php get_sidebar( 'footer' ); ?>
		
		<div class="wrapper wrapper-copy">
			<?php
			$footer_disclaimer_text = get_theme_mod( 'faith_footer_disclaimer_text', '' );
			if ( isset($footer_disclaimer_text) ) {
				echo force_balance_tags(wp_kses_post($footer_disclaimer_text, 'faith'));
			} ?>
			<p class="copy"><?php esc_attr_e('Copyright &copy;','faith');?> <?php echo date_i18n( __( 'Y', 'faith' ) ); ?> <?php bloginfo('name'); ?>. <?php esc_attr_e('All Rights Reserved', 'faith');?>.</p>
			<p class="copy-ilovewp"><span class="theme-credit"><?php _e( 'Theme by', 'faith' ); ?><a href="http://www.ilovewp.com/" rel="designer" class="footer-logo-ilovewp"><img src="<?php echo esc_url($ilovewp_logo); ?>" width="51" height="11" alt="<?php esc_attr_e('Church WordPress Themes', 'faith');?>" /></a></span></p>
		</div><!-- .wrapper .wrapper-copy -->
	
	</footer><!-- .site-footer -->

</div><!-- end #container -->

<?php wp_footer(); ?>

</body>
</html>