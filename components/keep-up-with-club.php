<section class="keep-up-with-club">
    <div class="container text-center py-2 mb-5">
        <h2>Keep up with the club</h2>
        <a href="" target="_blank"><i class="fab fa-instagram"></i> bigloveswimclub</a>
    </div>

    <div class="container">
        <div class="gallery-container swiper-container">
            <div class="gallery-wrapper swiper-wrapper">

            <?php if ( have_rows( 'gallery_item', 'options' ) ) : ?>
                <?php while ( have_rows( 'gallery_item', 'options' ) ) :
                    the_row(); ?>

                    <div class="gallery-slide swiper-slide">
                        <article class="gallery-card">
                            <?php if ( $title = get_sub_field( 'title', 'options' ) ) : ?>
                                <h4><?php echo esc_html( $title ); ?></h4>
                            <?php endif; ?>

                            <?php
                            $image = get_sub_field( 'image', 'options' );
                            if ( $image ) : ?>
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            <?php endif; ?>

                            <div class="gallery-card-content">
                                <?php if ( $content = get_sub_field( 'content', 'options' ) ) : ?>
                                    <p><?php echo $content; ?></p>
                                <?php endif; ?>


                                <?php if ( $hashtag = get_sub_field( 'hashtag', 'options' ) ) : ?>
                                    <h6><?php echo esc_html( $hashtag ); ?></h6>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
                
            </div>

            <div class="gallery-controls mt-5">
                <div class="gallery-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="gallery-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>
            </div>

        </div>
    </div>
</section>