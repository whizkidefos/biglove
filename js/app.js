//Navigation
jQuery(document).ready(function ($) {
	$(".burger").click(function () {
		$(".burger").toggleClass("open");
		$(".mobile-navigation").slideToggle("slow");
    $("body").toggleClass("overflow-hidden");
	});

  //Magnific Popup
  $('.image-link').magnificPopup({
    type:'image',
    removalDelay: 100,
    disableOn: 400
  });

});

// Sliders
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

var gallery = new Swiper('.gallery-container', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  effect: 'coverflow',
  grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 5,
          slideShadows: true,
        },
  speed: 2000,
  navigation: {
      nextEl: '.gallery-button-next',
      prevEl: '.gallery-button-prev',
    },
    breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    680: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    980: {
      slidesPerView: 3,
      spaceBetween: 20
    },
  }
});

// Back to top
scrollTopButton = document.getElementById("backToTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    scrollTopButton.style.display = "block";
  } else {
    scrollTopButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}