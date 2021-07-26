<?php get_header(); 
/**
 * Template Name: About BLSC
 */
?>

<header class="inner-page-banner fade-in-top">
    
    <div class="banner-image-block">
        <img src="<?php t(); ?>/images/about.jpg" alt="about page banner">
    </div>
    <div class="banner-title-block">
        <h1>Take a dip <br>with the <br>girls. </h1>
    </div>
    
</header>

<section class="about">
    <div class="container text-center">
        <h6>ABOUT BLSC</h6>
        <h2>Get to know us</h2>
       <div class="about-intro">
            <p>
                <strong>Big Love Swim Club provides professional swim coaching for women in Liverpool.</strong>
                <br><br>
                We can help you to achieve your swimming goals whether it’s learning how to overcome your fear of water, learning how to swim front crawl, improving your front crawl / breaststroke technique or learning open water swimming skills. <br><br> Lisa Kemp is the Founder of Big Love Swim Club and your Coach.
            </p>
       </div>

        <article class="lisa">
            <img src="<?php t(); ?>/images/lisa.jpg" alt="about page banner">
            <strong>Swimming has been a big part of Lisa’s life for over 40 years.</strong>
            <br><br>
            <p>Following years of pool swimming, Lisa discovered the joy of open water swimming. When she’s not swimming in the Queens Dock, Liverpool, she is likely to be found in the open sea or in a lake, river or mountain dipping pool in the heart of Wales or the Lake District. Lisa has competed in numerous triathlons and swimming events including the Liverpool Triathlon, West Lancs Spring Triathlon, The Great Welsh Swim, The Great North Swim and countless charity swim events.
            <br><br>
            Two years ago Lisa took a giant leap of faith and following a lengthy and successful career in law, decided to focus on her passion for swimming. She developed Big Love Swim Club as a much-needed platform to deliver safe, supportive and non-competitive swim coaching sessions for women.</p>
        </article>
    </div>
</section>

<?php get_template_part('/components/qualifications'); ?>

<?php get_template_part('components/keep-up-with-club'); ?>

<?php get_template_part('/components/what-swimmers-say'); ?>

<?php get_footer(); ?>