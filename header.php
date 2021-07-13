<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="logo">
            <a href="/"><img src="<?php t() ?>/images/logo.svg" alt="logo blue"></a>
        </div>

        <nav class="main-navigation">
                
                <?php
                    $args = array(
                        'theme_location'     =>  'main-menu',
                        'container'          =>  'div',
                        'container_class'    =>  'main-navigation'
                    );
                    wp_nav_menu( $args );
                ?>
        </nav>

        <div class="nav-icons">
            <a href="https://www.facebook.com/bigloveswimclub/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/bigloveswimclub/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="burger">
            <span class="burger-bar"></span>
        </div>
    </header>

    <div class="mobile-navigation">
        <nav class="main-navigation">
            <?php
                $args = array(
                    'theme_location'     =>  'main-menu',
                    'container'          =>  'div',
                    'container_class'    =>  'main-navigation'
                );
                wp_nav_menu( $args );
            ?>
            <div class="nav-icons">
                <a href="https://www.facebook.com/bigloveswimclub/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/bigloveswimclub/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <img src="<?php t() ?>/images/gray-heart.svg" alt="gray heart">
        </nav>
    </div>
    <main>