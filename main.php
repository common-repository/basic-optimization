<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @wordpress-plugin
 * Plugin Name:     Basic Optimization
 * Plugin URI:      https://github.com/Micro-Solutions-Bangladesh/basic-optimization
 * Description:     Very basic features offering by Basic Optimization for WordPress plugin. Like - Disable Emoticons, Remove Shortlink, Disable Embeds, Disable XML-RPC, Hide WordPress Version, etc. You will always able to manage this option from the setting page of the Basic Optimization for WordPress plugin. This plugin is an open source project, made possible by your contribution (code).
 * Version:            1.0
 * Author:              Micro Solutions Bangladesh
 * Author URI:       http://microsolutionsbd.com/
 * License:			   GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0
 * Text Domain:    basic-optimization
 * Domain Path:		/languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * The main plugin class
 */
final class Basic_Optimization {

    /**
     * Plugin version
     *
     * @var string
     */
    const version = '1.0';

    /**
     * Class construcotr
     */
    private function __construct() {
        $this->define_constants();

        register_activation_hook( __FILE__, [ $this, 'activate' ] );

        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );

        add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), [ $this, 'settings_link' ] );
    }

    /**
     * Initializes a singleton instance
     *
     * @return \Basic_Optimization
     */
    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define the required plugin constants
     *
     * @return void
     */
    public function define_constants() {
        define( 'BASIC_OPTIMIZATION_VERSION', self::version );
        define( 'BASIC_OPTIMIZATION_FILE', __FILE__ );
        define( 'BASIC_OPTIMIZATION_PATH', __DIR__ );
        define( 'BASIC_OPTIMIZATION_URL', plugins_url( '', BASIC_OPTIMIZATION_FILE ) );
        define( 'BASIC_OPTIMIZATION_ASSETS', BASIC_OPTIMIZATION_URL . '/assets' );
    }

    /**
     * Initialize the plugin
     *
     * @return void
     */
    public function init_plugin() {

        new Basic\Optimization\Assets();

        if ( is_admin() ) {
            new Basic\Optimization\Admin();
        } else {
            new Basic\Optimization\Frontend();
        }
    }

    /**
     * Do stuff upon plugin activation
     *
     * @return void
     */
    public function activate() {
        $installer = new Basic\Optimization\Installer();
        $installer->run();
    }

    /**
     * Applied to the list of links to display on the plugins page (beside the activate/deactivate links).
     * 
     * @return array list of links
     */
    public function settings_link ( $links ) {
        $mylinks = [
            '<a href="' . admin_url( 'options-general.php?page=basic-optimization' ) . '">Settings</a>',
        ];

       return array_merge( $links, $mylinks );
    }
}

/**
 * Initializes the main plugin
 *
 * @return \Basic_Optimization
 */
function basicOptimization() {
    return Basic_Optimization::init();
}

// kick-off the plugin
basicOptimization();


