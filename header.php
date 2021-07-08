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
            <div class="nav-links">
                <a href="<?php get_site_url() ?>/about-blsc">about blsc</a>
                <a href="<?php get_site_url() ?>/courses-and-coaching">courses & coaching</a>
                <a href="<?php get_site_url() ?>/connect-with-us">connect with us</a>
            </div>
        </nav>

        <div class="nav-icons">
            <a href="https://facebook.com/blsc" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://instagram.com/blsc" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="burger">
            <span class="burger-bar"></span>
        </div>
    </header>

    <div class="mobile-navigation">
        <nav class="main-navigation">
            <ul class="nav-links">
                <li><a href="<?php get_site_url() ?>/about-blsc">about blsc</a></li>
                <li><a href="<?php get_site_url() ?>/courses-and-coaching">courses & coaching</a></li>
                <li><a href="<?php get_site_url() ?>/connect-with-us">connect with us</a></li>
            </ul>
            <div class="nav-icons">
                <a href="https://facebook.com/blsc" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://instagram.com/blsc" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <img src="<?php t() ?>/images/gray-heart.svg" alt="gray heart">
        </nav>
    </div>
    <main>