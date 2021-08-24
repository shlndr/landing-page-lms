
$(document).ready(function() {
  $('#slider-sect').owlCarousel({
    loop: true,
    responsiveClass: true,
    dots:true,
    smartSpeed: 2000,
    autoplay:false,
    navText: ['<img src="images/left-arrow.png" alt=""/>','<img src="images/right-arrow.png" alt=""/>'],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1,
        nav: false,
        loop: true,
      }
    }
  });
  $('#our-client').owlCarousel({
    loop: true,
    responsiveClass: true,
    dots:false,
    autoplay:true,
  autoplayTimeout: 8000,
    smartSpeed: 2000,
      navText: ['<img src="images/left-arrow.png" alt=""/>','<img src="images/right-arrow.png" alt=""/>'],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 1,
        nav: true
      },
      1000: {
        items: 3,
        nav: true,
        loop: true,
      }
    }
  });
  $('#milestones').owlCarousel({
    loop: true,
    responsiveClass: true,
    dots:true,
    smartSpeed: 300,
    autoplay:false,
     navText: ['<img src="images/left-arrow.png" alt=""/>','<img src="images/right-arrow.png" alt=""/>'],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: true
      },
        768: {
        items: 2,
        nav: false
      },

      1100: {
        items: 4,
        nav: true,
        loop: true,
        slideBy:4
      }
    }
  });
  $('#testimonials').owlCarousel({
    loop: true,
    margin:20,
    nav:false,
    responsiveClass: true,
    dots:true,
    smartSpeed:300,
    autoplay:false,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },

      767: {
        items: 2,
        nav: false
      },
      1000: {
        items: 4,
        nav: false,
        loop: true,

      }
    }
  });
});






