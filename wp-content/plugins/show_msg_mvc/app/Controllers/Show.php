<?php 

namespace SP\app\Controllers;

class Show{
  
//Displaying just a sample page
  function display_view_page(){
    if(file_exists(SP_PLUGIN_PATH.'/app/views/sample_page.php')){
      include (SP_PLUGIN_PATH . '/app/views/sample_page.php');
    }else{
      wp_die('Sample Page Not Found');
    }
  }
  
  
   function display_custom_message()
   {
    add_menu_page(
      "Hello World", //Page Title
      apply_filters('changeMen',"Hello World"),  //Menu Title
      "manage_options", //Capability
      "hello_world",    //slug
      array($this,"display_view_page"),  //Callback
      '',  //icon
      6   //priority
    );
   }

  //  function show_my_content(){
  //   echo "<h1>Hello this is from custom plugin</h1>";
  //  }

}