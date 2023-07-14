<?php 

namespace SP\app;

class Route{
   function Hook(){
    $display= new \SP\app\Controllers\Show();
    $show=new \SP\app\Controllers\Shortcode();
    add_action('admin_menu',[$display,'display_custom_message']);
    add_shortcode( 'login_form', [$show,'show_shortcode'] );
    //add_action('my_own_hook',[$display,'show_my_content']);
   }
}

?>