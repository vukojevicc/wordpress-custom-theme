<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="<?php bloginfo('language'); ?>">

<head>
    <title>
        <?php
        bloginfo('name');
        wp_title('&#124;', true, 'left');
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <!--ios compatibility-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/frontend/apple-icon-144x144.png">


    <!--Android compatibility-->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="<?php bloginfo('name'); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/frontend/android-icon-192x192.png">


    <?php
    // Ucitavam defalut header od WP-a
    wp_head();
    ?>

</head>

<body <?php body_class(); ?>>

    <header class="bg-white fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light align-items-center px-0 py-3">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/frontend/image/logo.png' ?>" alt="logo" />
                    </a>
                <?php
                }
                ?>
                <button class="navbar-toggler pt-2" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="navbar-nav ml-md-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="about.html">About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>