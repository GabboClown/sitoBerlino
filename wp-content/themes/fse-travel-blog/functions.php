<?php
/**
 * FSE Travel Blog functions and definitions
 *
 * @package fse_travel_blog
 * @since 1.0
 */

if ( ! function_exists( 'fse_travel_blog_support' ) ) :
	function fse_travel_blog_support() {

		load_theme_textdomain( 'fse-travel-blog', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

	 add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');
		

	}
endif;
add_action( 'after_setup_theme', 'fse_travel_blog_support' );


if ( ! function_exists( 'fse_travel_blog_styles' ) ) :
	function fse_travel_blog_styles() {
		// Register theme stylesheet.
		$fse_travel_blog_theme_version = wp_get_theme()->get( 'Version' );

		$fse_travel_blog_version_string = is_string( $fse_travel_blog_theme_version ) ? $fse_travel_blog_theme_version : false;
		wp_enqueue_style(
			'fse-travel-blog-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_travel_blog_version_string
		);

		wp_enqueue_script( 'fse-travel-blog-custom-script', get_theme_file_uri( '/assets/custom-script.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'fse-travel-blog-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_travel_blog_styles' );

/* Theme Credit link */
define('FSE_TRAVEL_BLOG_BUY_NOW',__('https://www.cretathemes.com/products/traveller-blog-wordpress-theme','fse-travel-blog'));
define('FSE_TRAVEL_BLOG_PRO_DEMO',__('https://pattern.cretathemes.com/fse-travel-blog/','fse-travel-blog'));
define('FSE_TRAVEL_BLOG_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-travel-blog/','fse-travel-blog'));
define('FSE_TRAVEL_BLOG_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-travel-blog/','fse-travel-blog'));
define('FSE_TRAVEL_BLOG_SUPPORT',__('https://wordpress.org/support/theme/fse-travel-blog','fse-travel-blog'));
define('FSE_TRAVEL_BLOG_REVIEW',__('https://wordpress.org/support/theme/fse-travel-blog/reviews/#new-post','fse-travel-blog'));
define('FSE_TRAVEL_BLOG_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','fse-travel-blog'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function fse_travel_blog_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_travel_blog_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-travel-blog-guide-page' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Travel Blog Theme!', 'fse-travel-blog'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize get-start-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=fse-travel-blog-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'fse-travel-blog'); ?></a> 
	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-travel-blog'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( FSE_TRAVEL_BLOG_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fse-travel-blog'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( FSE_TRAVEL_BLOG_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'fse-travel-blog'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?fse_travel_blog_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-travel-blog' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'fse_travel_blog_admin_notice' );

if( ! function_exists( 'fse_travel_blog_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_travel_blog_update_admin_notice(){
    if ( isset( $_GET['fse_travel_blog_admin_notice'] ) && $_GET['fse_travel_blog_admin_notice'] = '1' ) {
        update_option( 'fse_travel_blog_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_travel_blog_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_travel_blog_getstart_setup_options');
function fse_travel_blog_getstart_setup_options () {
    update_option('fse_travel_blog_admin_notice', FALSE );
}

