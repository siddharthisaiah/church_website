<?php
/**
 * --------------------------------------------
 * Enqueue scripts and styles for the backend.
 *
 * @since Faith 1.0.9
 * --------------------------------------------
 */

if ( ! function_exists( 'faith_scripts_admin' ) ) {
	/**
	 * Enqueue admin styles and scripts
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function faith_scripts_admin( $hook ) {

		// Styles
		wp_enqueue_style(
			'faith-style-admin',
			get_template_directory_uri() . '/ilovewp-admin/css/ilovewp_theme_settings.css',
			'', ILOVEWP_VERSION, 'all'
		);
	}
}
add_action( 'admin_enqueue_scripts', 'faith_scripts_admin' );

/*
** Notice after Theme Activation and Update.
*/
function faith_activation_notice() {

	$screen = get_current_screen();

	if ( $screen->id == 'appearance_page_faith-doc' ) {
		return;
	}

	$theme_data	 = wp_get_theme();

	echo '<div class="notice notice-success faith-activation-notice">';
	
		echo '<h1>';
			/* translators: %s theme name */
			printf( esc_html__( 'Welcome to %s', 'faith' ), esc_html( $theme_data->Name ) );
		echo '</h1>';

		echo '<p>';
			/* translators: %1$s: theme name, %2$s link */
			printf( __( 'Thank you for choosing %1$s! To fully take advantage of the best our theme can offer please make sure you visit our <a href="%2$s">Welcome page</a>', 'faith' ), esc_html( $theme_data->Name ), esc_url( admin_url( 'themes.php?page=faith-doc' ) ) );
		echo '</p>';

		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=faith-doc' ) ) .'" class="button button-primary button-hero">';
			/* translators: %s theme name */
			printf( esc_html__( 'Get started with %s', 'faith' ), esc_html( $theme_data->Name ) );
		echo '</a></p>';

	echo '</div>';
}