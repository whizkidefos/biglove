<?php get_header(); ?>

<header class="page-header fade-in-top">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</header>

<section class="page-content" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <article>
            <?php the_content(); ?>
        </article>
    </div>
</section>

<?php get_footer(); ?>