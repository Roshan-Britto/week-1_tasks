<?php 
 namespace SP\app\Controllers;

 class Shortcode{
    function show_shortcode()
    {
        if(file_exists(SP_PLUGIN_PATH . '/app/views/shortcode_form.php')) 
        {
            ob_start();
            include (SP_PLUGIN_PATH . '/app/views/shortcode_form.php');
            return ob_get_clean();
        } 
        else 
        {
            wp_die('Shortcode Page Not Found');
        }
        
    }

 }

?>