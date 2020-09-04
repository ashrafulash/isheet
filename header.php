<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo get_bloginfo( 'name' ) .' | '. get_bloginfo( 'description' )?></title>
    
    <link rel="icon" href="<?php echo get_template_directory_uri(  ) ?>/assets/images/favicon.png" type="image/png" sizes="32x32">
    <?php
        wp_head();
    ?>
</head>


<body  <?php body_class( ) ?>>



<?php



    wp_nav_menu( array(
        'theme_location'    => 'primary-menu',
        'container'         => false,
        'walker'            => new Walker_Nav_Primary(),
    ) );

?>
