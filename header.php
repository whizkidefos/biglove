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
            <a href="/">BigLove</a>
        </div>

        <nav class="main-navigation">
            <div class="nav-links">
                <a href="<?php get_site_url() ?>/about-blsc">about blsc</a>
                <a href="<?php get_site_url() ?>/courses-coaching">courses & coaching</a>
                <a href="<?php get_site_url() ?>/connect-with-us">connect with us</a>
            </div>
        </nav>

        <div class="nav-icons">
            <a href="https://facebook.com/blsc" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://instagram.com/blsc" target="_blank"><i class="fab fa-instagram"></i></a>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>