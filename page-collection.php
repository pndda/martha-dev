<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?>

<div class="content">
    <div class="container-fluid">
        <? $slider = acf_photo_gallery('gallery', $post->ID); 
        // var_dump($slider);

    //   $slider = get_field('gallery');
        if( count($slider) ): 
            ?>


        <div id="carousel" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide collection-video">
                    <video autoplay controls class="video-martha">
                        <? $video = get_field('collection_video'); 
                        var_dump($video);
                        ?>
                        <source src="<? echo $video ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="swiper-slide collection-text">
                    <? the_content() ?>
                </div>

                
                
                
                
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-1.gif" alt="collection martha gif" class="swiper-slide">
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-2.gif" alt="collection martha gif" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/mood/naamloos--38-min.jpg" alt="collection martha mood" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-3.gif" alt="collection martha gif" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/mood/naamloos--10-min.jpg" alt="collection martha mood" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-5.gif" alt="collection martha gif" class="swiper-slide">
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-4.gif" alt="collection martha gif" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/mood/naamloos--18-min.jpg" alt="collection martha mood" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-6.gif" alt="collection martha gif" class="swiper-slide">
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-7.gif" alt="collection martha gif" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/mood/naamloos--11-min.jpg" alt="collection martha mood" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-9.gif" alt="collection martha gif" class="swiper-slide">
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/gif/martha-look-8.gif" alt="collection martha gif" class="swiper-slide">
                
                <img src="<? echo bloginfo('template_url'); ?>/assets/img/mood/naamloos--23-min.jpg" alt="collection martha mood" class="swiper-slide">
                
                

                <!-- <?php foreach( $slider as $image ): ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image['full_image_url']); ?>" alt="" class="swiper-slide">
                </div>


                <?php endforeach; ?> -->

            </div>

            <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
    </div>
</div>



<? get_footer(); ?>