var viewportHeight = $(window).height();
// console.log(viewportHeight);
var navPos = viewportHeight * 1.2
var logo = viewportHeight * 1.4; 

console.log(logo); 


$(window).scroll(function () {
   
      if ($(this).scrollTop() > navPos) {
        $('#mainNav').addClass("content_fixed");
        $('#mainNav').removeClass("content_remove");
         
      } else {
        $('#mainNav').removeClass("content_fixed");
        $('#mainNav').addClass("content_remove");
      
      }
  
  });

  $(window).scroll(function () {
   
    if ($(this).scrollTop() > logo) {

      // $('#hero').removeClass("stick-hero");
      $('#hero').addClass("scroll-hero");
      // console.log('yes');
      
      
    } 
    // else if($(this).scrollTop() > smallLogo) {

    //   $('.hero-position').css('height', 300);
    //   console.log('hero');
      
      
    // }
    
    
    else {
      // $('#hero').addClass("stick-hero");
      $('#hero').removeClass("scroll-hero");
      
    
    }

});

  