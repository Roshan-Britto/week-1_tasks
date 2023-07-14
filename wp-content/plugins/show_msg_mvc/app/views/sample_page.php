<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  
    <?php 
    echo apply_filters('changeTitle','<h1>Hi This is Sample page</h1>');  
    if(has_action( 'my_own_hook')){
        do_action('my_own_hook');
    }
    ?>
</body>
</html>