<?php
/**
 * Astra Theme & Addon Common function.
 *
 * @package Astra Filters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * Get all active Astra addons list
 */
$astra_extensions = get_option( '_astra_ext_enabled_extensions' );

/**
 * Validate is Astra Pro plugin activate
 */
if ( ! function_exists( '_is_astra_pro_activate' ) ) {

	function _is_astra_pro_activate() {

		if ( defined( 'ASTRA_EXT_FILE' ) ) {
			return true;
		}

		return false;
	}
}

/**
 * Validate is Astra Pro plugin activate with WooCommerce addon
 */
if ( ! function_exists( '_is_ast_woo_activate' ) ) {

	function _is_ast_woo_activate() {

		if ( class_exists( 'WooCommerce' ) && isset( $astra_extensions ) && 'woocommerce' === $astra_extensions['woocommerce'] ) {
			return true;
		}

		return false;
	}
}
