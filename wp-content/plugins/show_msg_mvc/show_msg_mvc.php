<?php 
/**
 * @package Show_Msg_MVC_Plugin
 * @version 1.7.2
 */
/*
Plugin Name: Show_Msg_MVC Plugin
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: SImple PLugin to test MVC Architecture
Author: Ajay Mathesh
Version: 1.7.2
Author URI: http://ma.tt/
*/

defined('ABSPATH') or exit;


defined('SP_PLUGIN_FILE') or define('SP_PLUGIN_FILE',__FILE__);
defined('SP_PLUGIN_PATH') or define('SP_PLUGIN_PATH',plugin_dir_path(__FILE__));

//autoload files
if(file_exists(SP_PLUGIN_PATH .'/vendor/autoload.php')){
   require SP_PLUGIN_PATH . '/vendor/autoload.php';
}else{
    wp_die('Error During Autoload');
}



if(class_exists('SP\app\Route')){
    $route=new \SP\app\Route();
    $route->Hook();
}else{
    die('Route Not Loaded');
}

