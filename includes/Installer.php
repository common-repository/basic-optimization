<?php

namespace Basic\Optimization;

/**
 * Installer class
 */
class Installer {

    /**
     * Run the installer
     *
     * @return void
     */
    public function run() {
        $this->configuration_initialization();
    }

    /**
     * Create necessary initialization of configurations (including time and version )
     * 
     * @return void
     */
    public function configuration_initialization() {
        $installed = get_option( 'basic_optimization_installed' );

        if ( ! $installed ) { // For fresh new installation
            update_option( 'basic_optimization_installed', time() );

            update_option( 'basic_optimization_disable_emoticons', true );
            update_option( 'basic_optimization_remove_shortlink', false );
            update_option( 'basic_optimization_remove_cssjs_ver', false );
            update_option( 'basic_optimization_remove_rsd_links', false );
            update_option( 'basic_optimization_disable_embed', false );
            update_option( 'basic_optimization_disable_xmlrpc', false );
            update_option( 'basic_optimization_remove_wlwmanifest_link', false );
            update_option( 'basic_optimization_disable_pingback', false );
            update_option( 'basic_optimization_hide_wp_version', true );
            update_option( 'basic_optimization_stop_heartbeat', true );
            // update_option( 'basic_optimization_dequeue_dashicon', false );
        }

        update_option( 'basic_optimization_version', BASIC_OPTIMIZATION_VERSION );
    }
}
