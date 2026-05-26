<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package MetroNewspaper
 */

/**
 * Add customizer default values.
 *
 * @param array $default_options
 * @return array
 */
function metronewspaper_customizer_add_defaults( $default_options) {
	$defaults = array(
		// Excerpt Options
		'metronewspaper_excerpt_length'    => 30,
	);


	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'metronewspaper_customizer_defaults', 'metronewspaper_customizer_add_defaults' );

/**
 * Returns theme mod value saved for option merging with default option if available.
 * @since 1.0
 */
function metronewspaper_gtm( $option ) {
	// Get our Customizer defaults
	$defaults = apply_filters( 'metronewspaper_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'metronewspaper_excerpt_length' ) ) :
	/**
	 * Sets the post excerpt length to n words.
	 *
	 * function tied to the excerpt_length filter hook.
	 * @uses filter excerpt_length
	 */
	function metronewspaper_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		// Getting data from Theme Options
		$length	= metronewspaper_gtm( 'metronewspaper_excerpt_length' );

		return absint( $length );
	} // metronewspaper_excerpt_length.
endif;
add_filter( 'excerpt_length', 'metronewspaper_excerpt_length', 999 );

/*
 * Remove parentheses from categories widget
 */
function metronewspapercategories_postcount_filter ($variable) {
   $variable = str_replace('(', '<span class="post-count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','metronewspapercategories_postcount_filter');

/**
 * Customize excerpt more.
 */
if ( ! function_exists( 'metronewspaper_excerpt_more' ) ) :

function metronewspaper_excerpt_more( $more ) {
    if ( is_admin() ) {
        return $more;
    } else {
        return '... ';
    }
}
add_filter( 'excerpt_more', 'metronewspaper_excerpt_more' );

endif;

/**
 * Pro upgrade notice
 */
function metronewspaper_pro_upgrade_admin_notice() {

    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    ?>
    <div class="notice notice-info is-dismissible metronewspaper-pro-notice metronewspaper-pro-animate">
        <div class="">

            <div class="metronewspaper-pro-header">
                <span class="dashicons dashicons-star-filled"></span>
                <strong class="metronewspaper-pro-title">
                    <?php esc_html_e( 'Upgrade to MetroNewsPro', 'metronewspaper' ); ?>
                </strong>
            </div>
            <p class="metronewspaper-pro-desc">
                <?php esc_html_e( 'You are currently using the free version of the MetroNewspaper theme. Upgrade to the Pro version to unlock additional features:', 'metronewspaper' ); ?>
            </p>
            <ul class="metronewspaper-pro-features">
                <li><?php esc_html_e( 'Theme Options Panel', 'metronewspaper' ); ?></li>
                <li><?php esc_html_e( 'One Click Demo Import', 'metronewspaper' ); ?></li>
                <li><?php esc_html_e( '1000+ Google Fonts', 'metronewspaper' ); ?></li>
                <li><?php esc_html_e( 'Header Search', 'metronewspaper' ); ?></li>
                <li><?php esc_html_e( 'Sticky Header', 'metronewspaper' ); ?></li>
                <li><?php esc_html_e( 'Multiple Ad Positions on Homepage and Single Posts', 'metronewspaper' ); ?></li>
                <li><?php esc_html_e( 'Social Share for Single Posts', 'metronewspaper' ); ?></li> 
                <li><?php esc_html_e( 'Related Posts on Single Posts', 'metronewspaper' ); ?></li>                                               
                <li><?php esc_html_e( 'Priority Theme Support and More', 'metronewspaper' ); ?></li>                
            </ul>

            <div class="cta-button">
                <?php 
                    $theme = wp_get_theme();
                ?>
                <a href="<?php echo esc_url( $theme->get( 'AuthorURI' ) . '/themes/metronewspro' ); ?>"
                   class="button button-primary metronewspaper-pro-btn"
                   target="_blank"
                   rel="noopener noreferrer">
                    <?php esc_html_e( 'Upgrade to MetroNewsPro', 'metronewspaper' ); ?>
                </a>
            </div>

        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'metronewspaper_pro_upgrade_admin_notice' );

add_action( 'admin_enqueue_scripts', function () {
    wp_add_inline_style(
        'wp-admin',
        '
        .metronewspaper-pro-notice {
            padding: 0;
            border-left: none;
            background: transparent;
        }

        .metronewspaper-pro-animate {
            position: relative;
            padding: 14px 18px 16px;
            background: #fffaf3;
            border-radius: 4px;
        }

        .metronewspaper-pro-animate::before {
            content: "";
            position: absolute;
            inset: 0;
            border-left: 6px solid #ff9800;
            animation: metronewspaperBorderPulse 2.2s ease-in-out infinite;
        }

        .metronewspaper-pro-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 6px;
            position: relative;
            z-index: 1;
        }

        .metronewspaper-pro-header .dashicons {
            color: #ff9800;
            font-size: 22px;
        }

        .metronewspaper-pro-title {
            font-size: 14px;
        }

        /* Clean list styling */
        .metronewspaper-pro-features {
            list-style: none;
            margin: 0 0 10px;
            padding: 0;
            position: relative;
            z-index: 1;
        }

        .metronewspaper-pro-features li {
            font-size: 13px;
            color: #555;
            padding-left: 20px;
            margin: 2px 0;
            position: relative;
        }

        .metronewspaper-pro-features li::before {
            content: "\f147"; /* dashicons-yes */
            font-family: dashicons;
            position: absolute;
            left: 0;
            top: 0;
            color: #46b450;
            font-size: 16px;
        }

        .cta-button {
            position: relative;
            z-index: 1;
        }

        @keyframes metronewspaperBorderPulse {
            0%   { box-shadow: 0 0 0 0 rgba(255,152,0,.35); }
            70%  { box-shadow: 0 0 0 10px rgba(255,152,0,0); }
            100% { box-shadow: 0 0 0 0 rgba(255,152,0,0); }
        }
        '
    );
});
