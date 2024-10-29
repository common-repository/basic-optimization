<?php

namespace Basic\Optimization\Admin;

/**
 * The Menu handler class
 */
class Menu {

    public $generalSettings;

    /**
     * Initialize the class
     */
    function __construct( $generalSettings ) {
        $this->generalSettings = $generalSettings;

        add_action( 'admin_menu', [ $this, 'admin_menu' ] );
    }

    /**
     * Register admin menu
     *
     * @return void
     */
    public function admin_menu() {
        $parent_slug = 'basic-optimization';
        $capability = 'manage_options';

        $hook = add_menu_page( __( 'Basic Optimization for WordPress', 'basic-optimization' ), __( 'Basic Optimization', 'basic-optimization' ), $capability, $parent_slug, [ $this->generalSettings, 'plugin_page' ], 'dashicons-welcome-learn-more' );

        add_action( 'admin_head-' . $hook, [ $this, 'enqueue_assets' ] );
    }

    /**
     * Enqueue scripts and styles
     *
     * @return void
     */
    public function enqueue_assets() {
        // wp_enqueue_style( 'basic-optimization-admin-style' );
        // wp_enqueue_script( 'basic-optimization-admin-script' );
    }
}
