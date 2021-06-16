<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?>


<!-- <div id="arrowDown" class="home-arrow hide-on-mobile">

    ↓
</div>
<div id="arrowTop" class="top-arrow hide-on-mobile">
    ↑
</div> -->


<?  $img1 = get_field('image_1');
    $img2 = get_field('image_2');
?>
<section class="image-overlap rellax" data-rellax-speed=".5">
    <div class="container">
        <div class="image-overlap__container">
            <img src="<?php echo $img1 ?>" alt="" class="frst-v first-v-left ">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_02-min.png" alt=""
                class="frst-v first-v-right frst-v-max">
        </div>
    </div>
</section>

<section class="sticky-quote">
    <div class="container">
        <div class="quote quote-imagine " data-rellax-speed=".5">
            <h2 class="img-mobile">imagine <br>the <br class="future">future</h2>
            <h2 class="img-desktop ">imagine <br> the future</h2>
            <ul>
                <li>the future is black</li>
                <li>new collection 2021</li>
            </ul>
        </div>

    </div>

</section>
<header id="mainNav" class="content_remove">
    <div class="container">
        <? wp_nav_menu(
                   array(
                       'theme_location' => 'main-menu', 
                       'menu_id'        => 'main-nav', 
                       'menu_class'     => 'main-nav'
                   )
                   );  ?>
    </div>
</header>

<?  $img3 = get_field('image_3');
    $img4 = get_field('image_4');
    $img5 = get_field('image_5');
    $img6 = get_field('image_6');
?>
<section class="image-overlap-big">
    <img src="<?php echo $img3 ?>" alt="" class="img-big img-mobile rellax" data-rellax-speed="0">

    <div class="container scnd-overlap rellax" data-rellax-speed="0">
        <div class="scnd-overlap-big">
            <img src="<?php echo $img3 ?> " alt="" class="img-big img-desktop">
        </div>
        <div class="scnd-overlap__img-left">
            <img src="<?php echo $img4 ?>" alt="" class="scnd-v scnd-v-left">
        </div>
        <div class="scnd-overlap__img">
            <img src="<?php echo $img5 ?>" alt="" class="scnd-v scnd-v-right">
        </div>
        <div class="scnd-overlap__max">
            <img src="<?php echo $img6 ?>" alt="" class="img-big img-desktop">
        </div>
    </div>
    <div class="container">
        <div class="quote quote-brave rellax" data-rellax-speed=".5">
            <h2>A brave <br> new <br> world</h2>
        </div>
    </div>

    <img src="<?php echo $img6 ?>" alt="" class="img-big img-mobile rellax" data-rellax-speed="0">

    <?  
    $img7 = get_field('image_7');
    $img8 = get_field('image_8');
    $img9 = get_field('image_9');
    $img10 = get_field('image_10');
    $img11 = get_field('image_11');
 
?>
    <div class="container">
        <div class="add-pink rellax" data-rellax-speed="0">
            <img src="<?php echo $img7 ?>" alt="" class="img-small thrd-v-right">
            <img src="<?php echo $img8 ?>" alt="" class="img-small thrd-v-left">
            <img src="<?php echo $img10 ?>" alt="" class="img-big thrd-max img-desktop">
        </div>
        <div class="quote quote-fresh rellax" data-rellax-speed="0.5">
            <h2 class="img-mobile">a fresh <br> start</h2>
            <h2 class="img-desktop">a fresh beginning</h2>
        </div>
    </div>
    <div class="container v-max rellax" data-rellax-speed="0">
        <img src="<?php echo $img9 ?>" alt="" class="img-big v-position">
        <img src="<?php echo $img10 ?>" alt="" class="img-small v-big img-mobile">
        <img src="<?php echo $img11 ?>" alt="" class="img-small v-big img-desktop">
    </div>
    <div class="container rellax" data-rellax-speed="0">
        <div class="quote quote-future">
            <h2 class="img-mobile">the <br> future <br> is black</h2>
            <h2 class="img-desktop">the future <br> is black</h2>
        </div>
    </div>
    <div class="center-img rellax" data-rellax-speed="0">
        <img src="<?php echo $img11 ?>" alt="" class="img-small img-mobile">
    </div>


</section>

<? get_footer(); ?>