<section class="what-swimmers-say">
    <div class="container">
        <h3 class="text-center">What our swimmers are saying</h3>
        <img src="<?php t(); ?>/images/blue-heart-quote-icon.svg" alt="heart with quote">
        <article class="quotes text-center">
            <div class="quote-container swiper-container">
                <div class="quote-wrapper swiper-wrapper">
                    <?php if (have_rows('quotes', 'option')): while (have_rows('quotes', 'option')): the_row() ?>
                    <div class="quote-slide swiper-slide">
                        <h5><?php the_sub_field('name') ?></h5>
                        <p><?php the_sub_field('quote') ?></p>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="quotes-control">
                    <div class="quote-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="quote-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </article>
    </div>
</section>