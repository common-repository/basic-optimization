<?php

namespace Basic\Optimization;

/**
 * Assets handlers class
 */
class Assets {

    /**
     * Class constructor
     */
    function __construct() {
        // add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'register_assets' ] );
    }

    /**
     * All available scripts
     *
     * @return array
     */
    public function get_scripts() {
        return [
            // 'basic-optimization-admin-script' => [
            //     'src'     => BASIC_OPTIMIZATION_ASSETS . '/js/admin.js',
            //     'version' => filemtime( BASIC_OPTIMIZATION_PATH . '/assets/js/admin.js' ),
            //     'deps'    => [ 'jquery', 'wp-util' ]
            // ],
        ];
    }

    /**
     * All available styles
     *
     * @return array
     */
    public function get_styles() {
        return [
            // 'basic-optimization-admin-style' => [
            //     'src'     => BASIC_OPTIMIZATION_ASSETS . '/css/admin.css',
            //     'version' => filemtime( BASIC_OPTIMIZATION_PATH . '/assets/css/admin.css' )
            // ],
        ];
    }

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_assets() {
        $scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }
    }
}
