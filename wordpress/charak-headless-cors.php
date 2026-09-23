<?php
/**
 * Plugin Name: Charak Headless WooCommerce CORS Helper
 * Description: Exposes WooCommerce Store API Cart-Token/Nonce response headers so the Astro storefront can use headless cart + checkout.
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_filter( 'rest_exposed_cors_headers', function ( $headers ) {
    $headers[] = 'Cart-Token';
    $headers[] = 'Nonce';
    return array_values( array_unique( $headers ) );
} );

add_filter( 'rest_allowed_cors_headers', function ( $headers ) {
    $headers[] = 'Cart-Token';
    $headers[] = 'Nonce';
    return array_values( array_unique( $headers ) );
} );
