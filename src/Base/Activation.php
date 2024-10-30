<?php

namespace HiDeasWebsiteDialer\Base;

class Activation {
    
    /**
     * Run upon activating the plugin
     *
     */
    public static function hi_deas_call_central_generate_hash_key() {
        self::get_instance()->save_hash_key();
        flush_rewrite_rules();
    }
    
    /**
     * Function to save newly generated hash key
     *
     */
    public function save_hash_key() {
        $saved_hash_key = get_option('HiDeasWebsiteDialerHashedKey');
        if(empty($saved_hash_key)) {
            $generate_hash = self::get_instance()->generate_random();
            update_option('HiDeasWebsiteDialerHashedKey', $generate_hash);
        }
    }
    
    
    /**
     * Generate unique random string
     *
     * @param int $length
     * @return string
     */
    public function generate_random($length = 64) {
        $random = '';
        srand( (double) microtime() * 1000000);
        $char_list = 'abcdefghijklmnopqrstuvwxyz';
        $char_list .= '1234567890';
        
        for($i = 0; $i < $length; $i++)
        {
            $random .= substr($char_list,(rand()%(strlen($char_list))), 1);
        }
        
        return $random.time();
    }
    
    
    /**
     * @return Activation
     */
    public static function get_instance()
    {
        static $instance = null;
        
        if (is_null($instance)) {
            $instance = new self();
        }
        
        return $instance;
    }
}