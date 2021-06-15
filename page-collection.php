<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 
<div class="content">
        <div class="container">
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <? the_content(); ?>
                  </div>
                  <div class="swiper-slide">
                      <img src="" alt="">
                  </div>
                  <div class="swiper-slide">Slide 3</div>
                  <div class="swiper-slide">Slide 4</div>
                  <div class="swiper-slide">Slide 5</div>
                  <div class="swiper-slide">Slide 6</div>
                  <div class="swiper-slide">Slide 7</div>
                  <div class="swiper-slide">Slide 8</div>
                  <div class="swiper-slide">Slide 9</div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </div>

    </div>


<? get_footer(); ?> 
