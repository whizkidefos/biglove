<?php get_header(); ?>


<header class="inner-page-banner single-course-page-banner">
    
    <div class="banner-image-block">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="banner-title-block course-page-title">
        <h1><?php the_title(); ?></h1>
    </div>
    
</header>


<article class="single-course-content">
    <div class="difficulty-level">
        <h6>Difficulty level:</h6>
        <?php if(get_field('difficulty_level') == '1'): ?>
            <div class="heart-icons">
                <i class="fas fa-heart"></i>
                <i class="far fa-heart"></i>
                <i class="far fa-heart"></i>
                <i class="far fa-heart"></i>
                <i class="far fa-heart"></i>
            </div>
        <?php endif; ?>

        <?php if(get_field('difficulty_level') == '2'): ?>
            <div class="heart-icons">
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="far fa-heart"></i>
                <i class="far fa-heart"></i>
                <i class="far fa-heart"></i>
            </div>
        <?php endif; ?>

        <?php if(get_field('difficulty_level') == '3'): ?>
            <div class="heart-icons">
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="far fa-heart"></i>
                <i class="far fa-heart"></i>
            </div>
        <?php endif; ?>

        <?php if(get_field('difficulty_level') == '4'): ?>
            <div class="heart-icons">
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="far fa-heart"></i>
            </div>
        <?php endif; ?>

        <?php if(get_field('difficulty_level') == '5'): ?>
            <div class="heart-icons">
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-heart"></i>
            </div>
        <?php endif; ?>
    </div>
    <h6 class="price">£<?php the_field('price'); ?> per session</h6>
    <?php the_content(); ?>
    <br>
    <h2>Join the club</h2>
    <br>
    <?php echo do_shortcode('[wpforms id="50" title="false"]'); ?>
</article>

<?php get_footer(); ?>