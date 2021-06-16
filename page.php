<?php get_header(); ?>

<header class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</header>

<section class="page-content">
    <div class="container">
        <article>
            <?php the_content(); ?>
        </article>
    </div>
</section>

<?php get_footer(); ?>