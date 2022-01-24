<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if ( ! class_exists( 'Redux' ) ) {
	return null;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'buson_options';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// REQUIRED!!  Change these values as you need/desire.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	'menu_title'                => esc_html__( 'Buson Options', 'buson' ),
	'page_title'                => esc_html__( 'Buson Options', 'buson' ),

	// Disable this in case you want to create your own google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Choose an icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Choose an priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Set a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc.
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 4,

	// For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel.
	'page_slug'                 => '_options',

	// On load save the defaults to DB before user clicks save or not.
	'save_defaults'             => true,

	// If true, shows the default value next to each field that is not the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default. Suggested: *.
	'default_mark'              => '',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// CAREFUL -> These options are for advanced use only.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
	'output_tag'                => true,

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',

	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	'use_cdn'                   => true,
	'compiler'                  => true,

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
//$args['admin_bar_links'][] = array(
//	'id'    => 'redux-docs',
//	'href'  => '//devs.redux.io/',
//	'title' => esc_html__( 'Documentation', 'buson' ),
//);

//$args['admin_bar_links'][] = array(
//	'id'    => 'redux-support',
//	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
//	'title' => esc_html__( 'Support', 'buson' ),
//);

//$args['admin_bar_links'][] = array(
//	'id'    => 'redux-extensions',
//	'href'  => 'redux.io/extensions',
//	'title' => esc_html__( 'Extensions', 'buson' ),
//);




Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */


/*
 *
 * ---> BEGIN SECTIONS
 *
 */

/* As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for. */

/* -> START Basic Fields. */

$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
);



$section = array(
	'title' => __( 'General', 'buson' ),
	'id'    => 'general',
	'desc'  => __( 'General field for header & footer.', 'buson' ),
	'icon'  => 'el el-home',
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'Header', 'buson' ),
	'desc'       => esc_html__( 'Set Your Header information.', 'buson' ),
	'id'         => 'header-info',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'header-address',
			'type'     => 'text',
			'title'    => esc_html__( 'Address', 'buson' ),
			'subtitle' => esc_html__( 'The address will be added to the top header after the location icon.', 'buson' ),
			'default'  => '65/A, 17th floor, Kings land, New York',
		),
		array(
			'id'       => 'header-email',
			'type'     => 'text',
			'title'    => esc_html__( 'E-mail', 'buson' ),
			'subtitle' => esc_html__( 'The E-mail address will be added to the top header after the mail icon.', 'buson' ),
			'default'  => 'info@consulting.com',
		),
		array(
			'id'       => 'header-social-linkedin',
			'type'     => 'text',
			'title'    => esc_html__( 'Linkedin URL', 'buson' ),
		),
		array(
			'id'       => 'header-social-twitter',
			'type'     => 'text',
			'title'    => esc_html__( 'Twitter URL', 'buson' ),
		),
		array(
			'id'       => 'header-social-facebook',
			'type'     => 'text',
			'title'    => esc_html__( 'Facebook URL', 'buson' ),
		),
		array(
			'id'       => 'header-social-gplus',
			'type'     => 'text',
			'title'    => esc_html__( 'Google+ URL', 'buson' ),
		),
	),
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'Footer', 'buson' ),
	'desc'       => esc_html__( 'Set Your Footer information.', 'buson' ),
	'id'         => 'footer-info',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'footer-desc',
			'type'     => 'textarea',
			'title'    => esc_html__( 'Short Description', 'buson' ),
			'subtitle' => esc_html__( 'The Short Description will be added to the footer under the logo.', 'buson' ),
			'default'  => 'Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod',
		),
        array(
            'id'       => 'footer-social-facebook',
            'type'     => 'text',
            'title'    => esc_html__( 'Facebook URL', 'buson' ),
        ),
        array(
            'id'       => 'footer-social-twitter',
            'type'     => 'text',
            'title'    => esc_html__( 'Twitter URL', 'buson' ),
        ),
		array(
			'id'       => 'footer-social-linkedin',
			'type'     => 'text',
			'title'    => esc_html__( 'Linkedin URL', 'buson' ),
		),
		array(
			'id'       => 'footer-social-pinterest',
			'type'     => 'text',
			'title'    => esc_html__( 'Pinterest URL', 'buson' ),
		),
		array(
			'id'       => 'footer-number',
			'type'     => 'text',
			'title'    => esc_html__( 'Phone Number', 'buson' ),
		),
		array(
			'id'       => 'footer-email',
			'type'     => 'text',
			'title'    => esc_html__( 'E-mail', 'buson' ),
		),
		array(
			'id'       => 'footer-address',
			'type'     => 'text',
			'title'    => esc_html__( 'Address', 'buson' ),
		),
		array(
			'id'       => 'footer-copyright-text',
			'type'     => 'textarea',
			'title'    => esc_html__( 'Copyrights text', 'buson' ),
            'subtitle' => esc_html__( 'Place here text you want to see in the copyrights area.', 'buson' ),
			'default'  => 'Copyright © 2022 All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>',
            'desc'     => esc_html__( 'Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0.', 'buson' ),
		),
	),
);

Redux::set_section( $opt_name, $section );
$section = array(
	'title'      => esc_html__( 'Contact', 'buson' ),
	'desc'       => esc_html__( 'Set Your Contact information.', 'buson' ),
	'id'         => 'contact-us-info',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'cti-1',
			'type'     => 'text',
			'title'    => esc_html__( 'Address line 1', 'buson' ),
		),
		array(
			'id'       => 'cti-2',
			'type'     => 'text',
			'title'    => esc_html__( 'Address line 2', 'buson' ),
		),
        array(
            'id'       => 'ctn',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Number', 'buson' ),
        ),
        array(
            'id'       => 'ctnt',
            'type'     => 'text',
            'title'    => esc_html__( 'Call Time', 'buson' ),
        ),
        array(
            'id'       => 'cte',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Email', 'buson' ),
        ),
        array(
            'id'       => 'ctet',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Email Text', 'buson' ),
        ),
	),
);

Redux::set_section( $opt_name, $section );

/*
 * <--- END SECTIONS
 */