

// HAMBURGER MENU MOBILE 
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if (!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});


// NAVBAR CLOSES AFTER CLICKING ON LINKS IN MOBILE VIEW
var elements = document.getElementsByClassName("nav-link");

var myFunction = function () {
  if (!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
};

for (var i = 0; i < elements.length; i++) {
  elements[i].addEventListener('click', myFunction, false);
}



const navBg = document.querySelectorAll(".fixed-top");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    if (!navBg[0].classList.contains("scrolled")) {
      navBg[0].classList.add("scrolled");
      // navBg[1].classList.add("scrolled");
    }
  } else {
    if (navBg[0].classList.contains("scrolled")) {
      navBg[0].classList.remove("scrolled");
      // navBg[1].classList.remove("scrolled");
    }
  }
  // scrollFunction();
});

(function ($) {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    navText: [
      "<i class='fa fa-caret-left'></i>",
      "<i class='fa fa-caret-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  })

  $(document).ready(function () {
    $(".owl-nav").owlCarousel({
      navigation: false
    });
  });


  // SMOOTH SCROLLING SECTIONS
  $('a[href*=#]:not([href=#])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      || location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

})(jQuery);
// OWL CAROUSEL



// if('#vision'.onClick()){
//   $("#mission").addClass("d-none");
//   $("#vision").removeClass("d-none");
//   $("#objectives").addClass("d-none");
// }

