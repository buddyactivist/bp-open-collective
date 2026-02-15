<?php
/**
 * Plugin Name: BP Open Collective 
 * Description: Open Collective for BuddyPress/BuddyBoss Groups.
 * Version: 1.0.0
 * Author: BuddyActivist
 * Text Domain: bp-open-collective
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BPOC_PLUGIN_VERSION', '0.2.0' );
define( 'BPOC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'BPOC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BPOC_TEXT_DOMAIN', 'bp-open-collective' );

require_once BPOC_PLUGIN_DIR . 'includes/class-bpoc-loader.php';

function bpoc_init_plugin() {
    $loader = new BPOC_Loader();
    $loader->init();
}
add_action( 'plugins_loaded', 'bpoc_init_plugin' );
