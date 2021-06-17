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

                <?php foreach( $slider as $image ): ?>

                <img src="<?php echo esc_url($image['full_image_url']); ?>" alt="" class="swiper-slide">






                <?php endforeach; ?>

            </div>

            <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
    </div>
</div>



<? get_footer(); ?>