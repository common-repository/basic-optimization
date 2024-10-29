<?php

namespace Basic\Optimization\Admin;

use Basic\Optimization\Traits\Form_Error;

/**
 * General Settings Handler class
 */
class GeneralSettings {

    use Form_Error;

    /**
     * Plugin page handler
     *
     * @return void
     */
    public function plugin_page() {

        $disable_emojis = get_option( 'basic_optimization_disable_emoticons' );
        $remove_shortlink = get_option( 'basic_optimization_remove_shortlink' );
        $remove_cssjs_ver = get_option( 'basic_optimization_remove_cssjs_ver' );
        $remove_rsd_links = get_option( 'basic_optimization_remove_rsd_links' );
        $disable_embed = get_option( 'basic_optimization_disable_embed' );
        $disable_xmlrpc = get_option( 'basic_optimization_disable_xmlrpc' );
        $remove_wlwmanifest_link = get_option( 'basic_optimization_remove_wlwmanifest_link' );
        $disable_pingback = get_option( 'basic_optimization_disable_pingback' );
        $hide_wp_version = get_option( 'basic_optimization_hide_wp_version' );
        $stop_heartbeat = get_option( 'basic_optimization_stop_heartbeat' );
        $dequeue_dashicon = get_option( 'basic_optimization_dequeue_dashicon' );

        $template = __DIR__ . '/views/general-settings.php';

        include $template;
    }

    /**
     * Handle the form
     *
     * @return void
     */
    public function form_handler() {
        if ( ! isset( $_POST['submit_general_settings'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'general-settings' ) ) {
            wp_die( 'Are you cheating?' );
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_die( 'Are you cheating?' );
        }

        $disable_emojis = ( isset( $_POST['disable_emojis'] ) && ( 'yes' == $_POST['disable_emojis'] ) );
        update_option( 'basic_optimization_disable_emoticons', $disable_emojis );

        $remove_shortlink = ( isset( $_POST['remove_shortlink'] ) && ( 'yes' == $_POST['remove_shortlink'] ) );
        update_option( 'basic_optimization_remove_shortlink', $remove_shortlink );

        $remove_cssjs_ver = ( isset( $_POST['remove_cssjs_ver'] ) && ( 'yes' == $_POST['remove_cssjs_ver'] ) );
        update_option( 'basic_optimization_remove_cssjs_ver', $remove_cssjs_ver );

        $remove_rsd_links = ( isset( $_POST['remove_rsd_links'] ) && ( 'yes' == $_POST['remove_rsd_links'] ) );
        update_option( 'basic_optimization_remove_rsd_links', $remove_rsd_links );

        $disable_embed = ( isset( $_POST['disable_embed'] ) && ( 'yes' == $_POST['disable_embed'] ) );
        update_option( 'basic_optimization_disable_embed', $disable_embed );

        $disable_xmlrpc = ( isset( $_POST['disable_xmlrpc'] ) && ( 'yes' == $_POST['disable_xmlrpc'] ) );
        update_option( 'basic_optimization_disable_xmlrpc', $disable_xmlrpc );

        $remove_wlwmanifest_link = ( isset( $_POST['remove_wlwmanifest_link'] ) && ( 'yes' == $_POST['remove_wlwmanifest_link'] ) );
        update_option( 'basic_optimization_remove_wlwmanifest_link', $remove_wlwmanifest_link );

        $disable_pingback = ( isset( $_POST['disable_pingback'] ) && ( 'yes' == $_POST['disable_pingback'] ) );
        update_option( 'basic_optimization_disable_pingback', $disable_pingback );

        $hide_wp_version = ( isset( $_POST['hide_wp_version'] ) && ( 'yes' == $_POST['hide_wp_version'] ) );
        update_option( 'basic_optimization_hide_wp_version', $hide_wp_version );

        $stop_heartbeat = ( isset( $_POST['stop_heartbeat'] ) && ( 'yes' == $_POST['stop_heartbeat'] ) );
        update_option( 'basic_optimization_stop_heartbeat', $stop_heartbeat );

        // $dequeue_dashicon = ( isset( $_POST['dequeue_dashicon'] ) && ( 'yes' == $_POST['dequeue_dashicon'] ) );
        // update_option( 'basic_optimization_dequeue_dashicon', $dequeue_dashicon );

        $redirected_to = admin_url( 'admin.php?page=basic-optimization&settings-updated=true' );
        wp_redirect( $redirected_to );
        exit;
    }
}
