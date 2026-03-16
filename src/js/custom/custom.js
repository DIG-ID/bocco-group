$(function() {
  $('.navbar-toggler').on( 'click', function() {
     $('.main-header').toggleClass('is-open');
     $('body').toggleClass('is-open');
  });

  // Smooth scroll to anchor using Lenis
  $('.section-banner__btn').on( 'click', function (e) {
    e.preventDefault();
    var target = $($.attr(this, 'href'));
    if (target.length && window.lenis) {
      window.lenis.scrollTo(target[0], { offset: -200 });
    }
  });

  // Back to top button
  var btnBtt = $('#button-btt');
  if (window.lenis) {
    window.lenis.on('scroll', function({ scroll }) {
      if (scroll > 300) {
        btnBtt.addClass('show');
      } else {
        btnBtt.removeClass('show');
      }
    });
  }
  btnBtt.on('click', function(e) {
    e.preventDefault();
    if (window.lenis) {
      window.lenis.scrollTo(0);
    }
  });
});