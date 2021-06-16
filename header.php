<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?> </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head() ?>
</head>

<body <? body_class(); ?> >
    <?  $classes = get_body_class();
        if(in_array('home',$classes)) :?>
    <section id="hero" class="stick-hero" >
        <div class="container hero-position">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/martha-logo-mobile-1.svg" alt=""
                class="mobile-header">
           

        </div>
    </section>

    <? else : ?>
    <div class="arrow">
        <a href="<? bloginfo('url')?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/arrow.svg"
                alt=""></a>
    </div>

    <header class="header__pages">
        <div class="container">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/footer-mobile.svg" alt=""
                class="fh fix-h img-mobile">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/desktop-head.svg" alt=""
                class="desktop-footer fh fix-h img-desktop">
        </div>
    </header>
    <? endif; ?>