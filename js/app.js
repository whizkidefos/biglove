//Navigation
jQuery(document).ready(function ($) {
	$(".burger").click(function () {
		$(".burger").toggleClass("open");
		$(".mobile-navigation").slideToggle('slow');
	});
});

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