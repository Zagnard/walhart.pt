$('.botao_seta').on('click', function () {
  $('html,body').animate({
    scrollTop: $("#todo").offset().top
  },
    1000);
});

$(document).ready(function () {
  $("#tudo").on('click', function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        window.location.hash = hash;
      });
    }
  });
});

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('a[href="#top"]').fadeIn();
    } else {
      $('a[href="#top"]').fadeOut();
    }
  });

  $('a[href="#top"]').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });
});