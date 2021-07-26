<?php get_header(); 
/**
 * Template Name: Connect with us
 */
?>

<header class="inner-page-banner fade-in-top">
    
    <div class="banner-image-block">
        <img src="<?php t(); ?>/images/about-hero.png" alt="courses page banner">
    </div>
    <div class="banner-title-block">
        <h1>come and <br>join us. </h1>
    </div>
    
</header>

<?php get_template_part('/components/join-the-club') ?>

<?php get_template_part('components/keep-up-with-club'); ?>

<?php get_template_part('/components/what-swimmers-say'); ?>

<?php get_footer(); ?>