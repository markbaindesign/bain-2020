<?php
/**
 * baindesign324_enqueue_styles
 */
if (!function_exists('baindesign324_enqueue_styles')) :
   function baindesign324_enqueue_styles()
   {
      if (!is_admin()) {

			$is_dev = bd324_is_dev_site(); // Check if this is a dev site

			$version = baindesign324_theme_version();
			$versioned_style_filename = '/style.' . $version . '.css';
			$versioned_style_uri = get_template_directory_uri() . $versioned_style_filename;
			$versioned_style_path = get_theme_file_path( $versioned_style_filename );
			$default_style_uri = get_template_directory_uri() . '/style.css';

			// If there's a versioned stylesheet & this isn't a dev site, load that; otherwise,
			// load the default stylesheet. 
			if ( file_exists( $versioned_style_path ) && $is_dev == FALSE ) {
				$target_style = $versioned_style_uri;
			} else {
				$target_style = $default_style_uri; // Dev site or no versioned CSS
			}

			// Enqueue the stylesheet
			wp_enqueue_style('baindesign324-style', $target_style, array(), null, false);
      }
   }
endif;

if ( ! function_exists( 'baindesign324_enqueue_animation_styles' ) ) :
	function baindesign324_enqueue_animation_styles() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/framework/assets/css/vendor/hamburgers.css', array(), null );
	        wp_enqueue_style( 'lity',  get_template_directory_uri() . '/framework/assets/css/vendor/lity.min.css', array(), null );	        
	    }
	}
endif;

if ( ! function_exists( 'bd324_enqueue_aos_styles' ) ) :
	function bd324_enqueue_aos_styles() {
	    if ( !is_admin() ) {
			wp_enqueue_style( 'aos-styles', '//unpkg.com/aos@2.3.1/dist/aos.css', array(), null );
	    }
	}
endif;

/**
 * Functional prototype styles
 */
if ( ! function_exists( 'bd324_enqueue_fp_styles' ) ) :
	function bd324_enqueue_fp_styles() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'fp-styles', get_template_directory_uri() . '/framework/assets/css/custom/prototype.css', array(), null );
	    }
	}
endif;

/**
 * Responsive nav JS styles
 */
if ( ! function_exists( 'baindesign324_enqueue_js_responsive_nav' ) ) :
	function baindesign324_enqueue_js_responsive_nav() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'responsive-nav-styles', get_template_directory_uri() . '/framework/assets/css/vendor/responsive-nav.css', array(), null );
	    }
	}
endif;

/**
 * Enqueue baguetterBox.js Gallery Lightbox styles
 */
if ( ! function_exists( 'baindesign324_enqueue_style_baguettebox' ) ) :
	function baindesign324_enqueue_style_baguettebox() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'bd324-fw-baguettebox-styles', get_template_directory_uri() . '/framework/assets/css/vendor/baguetteBox.min.css', array(), null );
	    }
	}
endif;