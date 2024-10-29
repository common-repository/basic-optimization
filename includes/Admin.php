<?php

namespace Basic\Optimization;

/**
 * The admin class
 */
class Admin {

    /**
     * Initialize the class
     */
    function __construct() {
        $generalSettings = new Admin\GeneralSettings();

        $this->dispatch_actions( $generalSettings );

        new Admin\Menu( $generalSettings );
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions( $generalSettings ) {
        add_action( 'admin_init', [ $generalSettings, 'form_handler' ] );
    }
}
