<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="h-page">
        <div class="container clearfix">
            <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Classic"/></a></div>
            <nav class="menu">
                <?php
                $args = array(
                    'theme_location' => 'header'
                );
                ?>

                <?php wp_nav_menu($args); ?>
            </nav>
            <div class="home-icon"><a href="<?php home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/home.png" alt="Home"/></a></div>
        </div>
    </header>