<?php get_header();
/**
 * Template Name: Courses and Coaching
 */
$args = array( 'post_type' => 'courses', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>

<header class="courses-and-coaching-banner">
    
    <div class="banner-image-block">
        <img src="<?php t(); ?>/images/courses.jpg" alt="page thumbnail">
    </div>
    <div class="banner-title-block">
        <h1>What we <br> get up to. </h1>
    </div>
    
</header>

<section class="courses-and-coaching">
    <div class="container">
        <h3 class="text-center">Courses & Coaching</h3>
        <div class="all-courses">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="course-block">
                <div class="course-block-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="course-block-content">
                    <h4><?php the_title(); ?></h4>

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
                    <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                    <br>
                    <a href="<?php get_site_url(); ?>/connect-with-us" class="btn-red">Book your place</a>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no courses matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>