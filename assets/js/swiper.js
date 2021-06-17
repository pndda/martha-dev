var swiper = new Swiper(".swiper-container", {
    slidesPerView: "auto",
    spaceBetween: 30,
    centeredSlides: true,
    grabCursor: true, 
    loop: true,
    keyboard: {
      enabled: true,
    },
    // autoplay: {
    //   delay: 5000,
    // },
    pauseOnMouseEnter: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

