<?php
$args = array( 'post_type' => 'courses', 'posts_per_page' => 4 );
$home_query = new WP_Query( $args ); 
?>

<section class="showcase" id="showcase" data-aos="fade-up" data-aos-duration="2000">
    <article class="container welcome">
        <div class="welcome-image">
            <img src="<?php t(); ?>/images/welcome-image.jpg" alt="welcome image">
        </div>
        <div class="welcome-content">
            <p>Welcome everyone</p>
            <h2>the liverpool <br>swimming club <br>for women</h2>
            <a href="<?php get_site_url(); ?>/about-blsc" class="btn-purple">Read more about us</a>
        </div>
    </article>

    <div class="container showcase-courses">
        <h3 class="text-center">Courses & Coaching</h3>

        <div class="showcase-cards">
        <?php if ( $home_query->have_posts() ) : ?>
        <?php while ( $home_query->have_posts() ) : $home_query->the_post(); ?>
            <div class="custom-card">
                <div class="custom-card-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="custom-card-content">
                    <h4><?php the_title() ?></h4>
                    <p><?php echo wp_trim_words( get_the_content(), 22, '...' ); ?></p>

                    <?php if (get_field( 'difficulty_level' )): ?>
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
                    <?php endif; ?>
                    <br>
                    <a href="<?php the_permalink() ?>" class="btn-red">Learn more</a>
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