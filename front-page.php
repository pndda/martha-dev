<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?>


<div id="arrowDown" class="home-arrow hide-on-mobile">

    ↓
</div>
<div id="arrowTop" class="top-arrow hide-on-mobile">
    ↑
</div>

<section class="image-overlap rellax" data-rellax-speed="2">
    <div class="container">
        <div class="image-overlap__container">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_10-min.png" alt=""
                class="frst-v first-v-left ">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_02-min.png" alt=""
                class="frst-v first-v-right frst-v-max">
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="quote quote-imagine">
            <h2 class="img-mobile">imagine <br>the <br class="future">future</h2>
            <h2 class="img-desktop">imagine <br> the future</h2>
            <ul>
                <li>the future is black</li>
                <li>new collection 2021</li>
            </ul>
        </div>

    </div>

</section>
<header id="mainNav">
    <div class="container">
        <ul class="main-nav">
            <li>
                <a href="collection.html">collection</a>
            </li>
            <li>
                <a href="about.html">marc martha</a>
            </li>
        </ul>
    </div>
</header>
<section class="image-overlap-big">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_35.png" alt="" class="img-big img-mobile">

    <div class="container scnd-overlap">
        <div class="scnd-overlap-big">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_35.png" alt=""
                class="img-big img-desktop">
        </div>
        <div class="scnd-overlap__img-left">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_08-min.png" alt=""
                class="scnd-v scnd-v-left">
        </div>
        <div class="scnd-overlap__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_21-min.png" alt=""
                class="scnd-v scnd-v-right">
        </div>
        <div class="scnd-overlap__max">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_18-min.png" alt=""
                class="img-big img-desktop">
        </div>
    </div>
    <div class="container">
        <div class="quote quote-brave">
            <h2>A brave <br> new <br> world</h2>
        </div>
    </div>

    <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_18-min.png" alt="" class="img-big img-mobile">

    <div class="container ">
        <div class="add-pink">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_32-min.png" alt=""
                class="img-small thrd-v-right">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_34-min.png" alt=""
                class="img-small thrd-v-left">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_15-min.png" alt=""
                class="img-big thrd-max img-desktop">
        </div>
        <div class="quote quote-fresh">
            <h2 class="img-mobile">a fresh <br> start</h2>
            <h2 class="img-desktop">a fresh beginning</h2>
        </div>
    </div>
    <div class="container v-max">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_25-min.png" alt=""
            class="img-big v-position">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_15-min.png" alt="" class="img-small v-big">
    </div>
    <div class="container">
        <div class="quote quote-future">
            <h2 class="img-mobile">the <br> future <br> is black</h2>
            <h2 class="img-desktop">the future <br> is black</h2>
        </div>
    </div>
    <div class="center-img">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/MARTHA_Oona_27-min.png" alt=""
            class="img-small img-mobile">
    </div>


</section>

<? get_footer(); ?>