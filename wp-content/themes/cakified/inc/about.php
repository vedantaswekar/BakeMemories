<?php
/**
 * Theme About Page
 *
 * @package Cakified
 * @since 1.0
 */

function cakified_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_cakified-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'cakified-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'cakified_theme_page_admin_style' );

/**
 * Add theme page
 */
function cakified_menu() {
	add_theme_page( esc_html__( 'Cakified Theme Info', 'cakified' ), esc_html__( 'Cakified Theme Info', 'cakified' ), 'edit_theme_options', 'cakified-theme', 'cakified_theme_page_display' );
}
add_action( 'admin_menu', 'cakified_menu' );

/**
 * Display About page
 */
function cakified_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'cakified' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://flythemes.net/','cakified'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/flylogo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Cakified!', 'cakified' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Cakified has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'cakified' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Cakified Pro Theme', 'cakified' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Cakified Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'cakified' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://flythemes.net/wordpress-themes/cakified-wordpress-theme/"); ?>><?php esc_html_e( 'Buy Cakified Pro', 'cakified' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'cakified' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/wordpress-themes/cakified-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'cakified' ); ?></a>
						<a target="_blank" href="https://flydemos.net/cakified/"><?php esc_html_e( 'View Demo', 'cakified' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'cakified' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'cakified' ); ?></h3>
						<p><?php esc_html_e( 'Loved Cakified? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'cakified' ); ?></p>
						<a href="https://wordpress.org/support/theme/cakified/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'cakified' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
