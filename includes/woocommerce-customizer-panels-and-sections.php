<?php
/**
 * Astra Filters - Panels & Sections
 *
 * @package Astra Filters for Astra Theme and Astra Pro
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sanitizes the checkbox field
 */
if ( ! function_exists( 'astra_filters_sanitize_checkbox' ) ) {

	function astra_filters_sanitize_checkbox( $checked ) {

		if( isset( $checked ) && true == $checked ) {
			return true;
		}

		return false;
	}
}

/**
 * Layout Panel and Sections
 */

// For Shop page no more products text in case of infinite scroll.
$wp_customize->add_setting(
	ASTRA_THEME_SETTINGS . '[ast-theme-shop-no-more-products]', array(
		'default'           => astra_get_option( 'ast-theme-shop-no-more-products' ),
		'type'              => 'option',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	ASTRA_THEME_SETTINGS . '[ast-theme-shop-no-more-products]', array(
		'type'     => 'text',
		'section'  => 'section-astra-filters-woo',
		'label'    => __( 'Shop Page Infinite Loop', 'astra-filters' ),
		'description'	=> __( 'Field to change text comes after infinite scroll on the shop.', 'astra-filters' ),
		'priority' => 5,
	)
);

// For WooCommerce header Cart text.
$wp_customize->add_setting(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-header-cart-label]', array(
		'default'           => astra_get_option( 'ast-pro-woo-header-cart-label' ),
		'type'              => 'option',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-header-cart-label]', array(
		'type'     => 'text',
		'section'  => 'section-astra-filters-woo',
		'label'    => __( 'Header Cart Text', 'astra-filters' ),
		'description'	=> __( 'Field to change the header WooCommerce item Cart text.', 'astra-filters' ),
		'priority' => 15,
	)
);

// For Woo Filter button icon class.
$wp_customize->add_setting(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-filter-icon-class]', array(
		'default'           => astra_get_option( 'ast-pro-woo-filter-icon-class' ),
		'type'              => 'option',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-filter-icon-class]', array(
		'type'     => 'text',
		'section'  => 'section-astra-filters-woo',
		'label'    => __( 'WooCommerce Filter Button Icon Class', 'astra-filters' ),
		'description'	=> __( 'Field to change class name for icon for WooCommerce offcanvas Filter button, can be replace by any font-awesome icon.', 'astra-filters' ),
		'priority' => 20,
	)
);

// For Quick View text on shop page (for image button option).
$wp_customize->add_setting(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-shop-quick-view-label]', array(
		'default'           => astra_get_option( 'ast-pro-woo-shop-quick-view-label' ),
		'type'              => 'option',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-shop-quick-view-label]', array(
		'type'     => 'text',
		'section'  => 'section-astra-filters-woo',
		'label'    => __( 'Quick View Label (On Image)', 'astra-filters' ),
		'description'	=> __( 'Field to change the Quick View text on WooCommerce shop page.', 'astra-filters' ),
		'priority' => 25,
	)
);

// For Quick View text on shop page (for after summary option).
$wp_customize->add_setting(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-shop-quick-view-summary-label]', array(
		'default'           => astra_get_option( 'ast-pro-woo-shop-quick-view-summary-label' ),
		'type'              => 'option',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-shop-quick-view-summary-label]', array(
		'type'     => 'text',
		'section'  => 'section-astra-filters-woo',
		'label'    => __( 'Quick View Label (After Summary)', 'astra-filters' ),
		'description'	=> __( 'Field to change the Quick View text on WooCommerce shop page.', 'astra-filters' ),
		'priority' => 30,
	)
);

// For WooCommerce header cart items total.
$wp_customize->add_setting(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-header-cart-total]', array(
		'default'           => astra_get_option( 'ast-pro-woo-header-cart-total' ),
		'type'              => 'option',
		'sanitize_callback' => 'astra_filters_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	ASTRA_THEME_SETTINGS . '[ast-pro-woo-header-cart-total]', array(
		'type' => 'checkbox',
		'section' => 'section-astra-filters-woo',
		'label' => __( 'Disable Header Cart Item\'s Total' ),
		'description'    => __( 'Check this option to disable the header cart items total.', 'astra-filters' ),
		'priority' => 35,
	)
);
