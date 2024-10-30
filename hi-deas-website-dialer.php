<?php
/**
 * Plugin Name: Hi-Deas Website Dialer
 * Plugin URI:  https://hideasng.com
 * Description: Hi-Deas Website Dialer for Internet Calls.
 * Author:      Hi-Deas Website Dialer
 * Author URI:  https://www.hideasng.com
 * Text Domain: hi-deas-website-dialer
 * Version:     1.0.1
 *
 * @package HiDeas_Website_Dialer
 */
 
require __DIR__ . '/lib/autoload.php';

define('HI_DEAS_WEBSITE_DIALER_SYSTEM_FILE_PATH', __FILE__);
define('HI_DEAS_WEBSITE_DIALER_PLUGIN_URL', plugin_dir_url(HI_DEAS_WEBSITE_DIALER_SYSTEM_FILE_PATH));
define('HI_DEAS_WEBSITE_DIALER_VERSION_NUMBER', '1.0.0');

add_action( 'plugins_loaded', 'hi_deas_call_central_library_init', 11);

register_activation_hook(__FILE__, [\HiDeasWebsiteDialer\Base\Activation::get_instance(), 'hi_deas_call_central_generate_hash_key']);

/**
 * function to run when the plugin is loaded
 *
 */
function hi_deas_call_central_library_init() {
    \HiDeasWebsiteDialer\Init::init();
}