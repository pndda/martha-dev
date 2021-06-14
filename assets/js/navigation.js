$(window).scroll(function () {
    if ($(window).width() < 767) {
      console.log('hello');
      if ($(this).scrollTop() > 100) {
        $('#mainNav').addClass("content_fixed-mob");
      } else {
        $('#mainNav').removeClass("content_fixed-mob");
      }
    } else {
  

      if ($(this).scrollTop() > 750) {
        $('#mainNav').addClass("content_fixed");
      } else {
        $('#mainNav').removeClass("content_fixed");
      }
    }
  
  });