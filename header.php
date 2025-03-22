<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <?php
            the_custom_logo();
            wp_nav_menu(array('theme_location' => 'primary'));
            dynamic_sidebar('header-widget');
            ?>
        </div>
    </header>
    <main class="site-content">
