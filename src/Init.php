<?php

namespace HiDeasWebsiteDialer;

define('HI_DEAS_CALL_CENTRAL_IMAGE_PATH', HI_DEAS_WEBSITE_DIALER_PLUGIN_URL.'assets/images');
define('HI_DEAS_CALL_CENTRAL_JS_PATH', HI_DEAS_WEBSITE_DIALER_PLUGIN_URL.'assets/js');

class Init {
    
    /**
     * Initialize all classes here
     *
     */
    public static function init() {
        \HiDeasWebsiteDialer\Core\Init::init_menu_types();
    }
}