var quote = new Swiper('.quote-container', {
    loop: true,
    autoplay: {
        delay: 5000,
    },
    speed: 2000,
    navigation: {
        nextEl: '.quote-button-next',
        prevEl: '.quote-button-prev',
      },
});