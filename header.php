<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    

    <header>
        <a class="<?php echo $pagename ?>" href="<?php echo home_url('/'); ?>">
            ( CAPSULE )
        </a>
        <nav class="<?php echo $pagename ?>">
            <?php wp_nav_menu(array('theme_location' => 'header-one')); ?>
        </nav>
        <nav class="<?php echo $pagename ?>">
            <?php wp_nav_menu(array('theme_location' => 'header-two')); ?>
        </nav>
    </header>


    <?php wp_body_open(); ?>