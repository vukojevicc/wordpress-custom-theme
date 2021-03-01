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
    <style>
    /* ovako sam ucitao theme.css zato sto se pri izmeni ovog fajla ne apdejtuje odmah promena koju sam izvrsio. Veb citac registruje promenu tek nakon odradjenog vremena, a pomocu ovakvog direktnog ukljucivanja fajla, promena u stylesheetu-u je odmah izvrsena. Verovatno nije najbolje resenje ali nisam bolje mogao da nadjem. */
        <?php
            require __DIR__ . '/frontend/css/theme.css';
        ?>
    </style>
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
                    <?php
                    $menuLocation = get_nav_menu_locations();
                    $mainMenuId = $menuLocation['main-menu'];

                    $topMenuItems = wp_get_nav_menu_items($mainMenuId);
                    // var_dump($topMenuItems);
                    if ($topMenuItems) {
                    ?>
                        <ul class="navbar-nav ml-md-auto">
                            <?php
                            foreach ($topMenuItems as $topMenuItem) {
                                $active = '';
                                if ($topMenuItem->url == get_permalink()) {
                                    $active = 'active';
                                }
                                if ($topMenuItem->menu_item_parent == 0) {

                                    $topItemID = $topMenuItem->ID;
                                    $subMenuItems = array();

                                    foreach ($topMenuItems as $SubMenuItem) {
                                        if ($SubMenuItem->menu_item_parent == $topItemID) {
                                            $subMenuItems[] = $SubMenuItem;

                                            $active_submenu = '';
                                            if ($SubMenuItem->url == get_permalink()) {
                                                $active_submenu = 'active';
                                            }
                                        }
                                    }
                            ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $active; ?>" href="<?php echo $topMenuItem->url ?>"><?php echo $topMenuItem->title ?></a>
                                        <?php
                                            if(!empty($subMenuItems)){
                                                ?>
                                                <ul class="sub-menu">
                                                    <?php
                                                        foreach($subMenuItems as $SubMenuItem){
                                                            ?>
                                                            <li class="nav-item"><a class='nav-link <?php echo $active_submenu ?>' href="<?php echo $SubMenuItem->url ?>"><?php echo $SubMenuItem->title ?></a></li>
                                                            <?php
                                                        }
                                                    ?>
                                                </ul>
                                                <?php
                                            }
                                        ?>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </nav>
        </div>
    </header>