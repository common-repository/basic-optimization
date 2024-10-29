<?php

namespace Basic\Optimization;

/**
 * Frontend handler class
 */
class Frontend {

    /**
     * Initialize the class
     */
    function __construct() {
        //
        add_action( 'init', [ $this, 'disable_emojis' ] );

        //
        add_action( 'init', [ $this, 'remove_shortlink' ] );

        //
        add_action( 'style_loader_src', [ $this, 'remove_cssjs_version' ] );
        add_action( 'script_loader_src', [ $this, 'remove_cssjs_version' ] );

        //
        add_action( 'init', [ $this, 'remove_rsd_links' ] );

        //
        add_action( 'wp_footer', [ $this, 'disable_embed' ] );

        //
        add_action( 'init', [ $this, 'disable_xmlrpc' ] );

        //
        add_action( 'init', [ $this, 'remove_wlwmanifest_link' ] );

        //
        add_action( 'pre_ping', [ $this, 'disable_pingback' ] );

        //
        add_action( 'init', [ $this, 'hide_wp_version' ] );
        
        //
        add_action( 'init', [ $this, 'stop_heartbeat' ], 1 );

        //
        // add_action( 'wp_enqueue_scripts', [ $this, 'dequeue_dashicon_callback' ] );
    }

    /**
     * Disable Emoticons.
     * Remove extra code related to emojis from WordPress which was added recently to support emoticons in an older browser.
     * 
     * @return void
     */
    public function disable_emojis() {
        $disable_emojis = get_option( 'basic_optimization_disable_emoticons' );

        if( $disable_emojis ) {
            remove_action('wp_head', 'print_emoji_detection_script', 7);
            remove_action('wp_print_styles', 'print_emoji_styles');
            remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
            remove_action( 'admin_print_styles', 'print_emoji_styles' );

            remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
            remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
            remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        }
    }


    /**
     * Remove Shortlink.
     * Starting from version 3, WordPress added shortlink (shorter link of web page address) in header code. For ex:
     * 
     * <link rel='shortlink' href='https://geekflare.com/?p=187' />
     * 
     * If not using shortlink for any functionality then we ned to remove them.
     * 
     * @return void
     */
    public function remove_shortlink() {
        $remove_shortlink = get_option( 'basic_optimization_remove_shortlink' );

        if ( $remove_shortlink ) {
            remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
        }
    }

    /**
     * Remove the query strings from the css and js assets file
     * Having query strings in the files may cause CDN not to cache the files; hence you may not be utilizing all caching benefits provided.
     * 
     * @return string source of the asset file after processing the ver query
     */
    public function remove_cssjs_version( $src ) {
        $remove_cssjs_ver = get_option( 'basic_optimization_remove_cssjs_ver' );

        if ( $remove_cssjs_ver ) {
            $src = remove_query_arg( 'ver', $src );
        }

        return $src;
    }

    /**
     * Remove RSD Links.
     * RSD (Really Simple Discovery) is needed if you intend to use XML-RPC client, pingback, etc. However, if you don’t need pingback or remote client to manage post then get rid of this unnecessary header.
     * 
     * @return void
     */

    public function remove_rsd_links() {
        $remove_rsd_links = get_option( 'basic_optimization_remove_rsd_links' );

        if ( $remove_rsd_links ) {
            remove_action( 'wp_head', 'rsd_link' ) ;
        }
    }

    /**
     * Disable Embeds.
     * WordPress introduced oEmbed features in 4.4. The function will prevent others from embedding your blog post and disable loading related JS file.
     * 
     * @return void
     */
    public function disable_embed(){
        $disable_embed = get_option( 'basic_optimization_disable_embed' );

        if ( $disable_embed ) {
            wp_dequeue_script( 'wp-embed' );
        }
    }

    /**
     * Disable XML-RPC.
     * Do you have a requirement to use WordPress API (XML-RPC) to publish/edit/delete a post, edit/list comments, upload file? Also having XML-RPC enabled and not hardened properly may lead to DDoS & brute force attacks.
     * 
     * If you don’t need then disable it
     * 
     * @return void
     */
    public function disable_xmlrpc() {
        $disable_xmlrpc = get_option( 'basic_optimization_disable_xmlrpc' );

        if ( $disable_xmlrpc ) {
            add_filter('xmlrpc_enabled', '__return_false');
        }
    }

    /**
     * Remove WLManifest Link.
     * Do you use tagging support with Windows live writer? If not remove it by adding below.
     * 
     * @return void
     */
    public function remove_wlwmanifest_link() {
        $remove_wlwmanifest_link = get_option( 'basic_optimization_remove_wlwmanifest_link' );

        if ( $remove_wlwmanifest_link ) {
            remove_action( 'wp_head', 'wlwmanifest_link' );
        }
    }

    /**
     * Disable Self Pingback.
     * I don’t know why you need the self-pingback details on your blog post and I know it’s not just I get annoyed.
     * 
     * @return void
     */
    public function disable_pingback( &$links ) {
        $disable_pingback = get_option( 'basic_optimization_disable_pingback' );

        if ( $disable_pingback ) {
            foreach ( $links as $l => $link ) {
                if ( 0 === strpos( $link, get_option( 'home' ) ) ) {
                    unset($links[$l]);
                }
            }
        }
    }

    /**
     * Hide WordPress Version.
     * This doesn’t help in performance but more to mitigate information leakage vulnerability. By default, WordPress adds meta name generator with the version details which is visible in source code and HTTP header.
     * 
     * @return void
     */
    public function hide_wp_version() {
        $hide_wp_version = get_option( 'basic_optimization_hide_wp_version' );

        if ( $hide_wp_version ) {
            remove_action( 'wp_head', 'wp_generator' );
        }
    }

    /**
     * Disable Heartbeat.
     * WordPress use heartbeat API to communicate with a browser to a server by frequently calling admin-ajax.php. This may slow down the overall page load time and increase CPU utilization if on shared hosting.
     * 
     * @return void
     */
    public function stop_heartbeat() {
        $stop_heartbeat = get_option( 'basic_optimization_stop_heartbeat' );

        if ( $stop_heartbeat ) {
            wp_deregister_script('heartbeat');
        }
    }

    /**
     * Disable Dashicons on Front-end
     * Dashicons are utilized in the admin console, and if not using them (`dashicons.min.css`) to load any icons on front-end then you may want to disable it.
     * 
     * @return void
     */
    // public function dequeue_dashicon_callback() {
    //     $dequeue_dashicon = get_option( 'basic_optimization_dequeue_dashicon' );

    //     if ( $dequeue_dashicon ) {
    //         if (current_user_can( 'update_core' )) {
    //             return;
    //         }

    //         wp_deregister_style('dashicons');
    //     }
    // }
}
