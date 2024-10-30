<?php

namespace HiDeasWebsiteDialer\Core;

class Init {
    
    /**
     * Initialize all core classes here
     *
     */
    public static function init_menu_types() {
        Settings::get_instance();
        Shortcode::get_instance();
    }
}