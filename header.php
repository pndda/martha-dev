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
        <section class="hero">
            <div class="container">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/martha-logo-desktop.svg" alt="" class="logo-desktop rellax"
                    data-rellax-speed="-7">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/martha-logo-mobile.svg" alt="" class="logo-mobile mobile-header rellax"
                    data-rellax-speed="-7">
            </div>
        </section>

        <? else : ?>
        <div class="arrow">
            <a href="index.html"><img src="/assets/img/icon/arrow.svg" alt=""></a>
        </div>
        <header class="header__pages">
            <div class="container">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/footer-mobile.svg" alt="" class="fh fix-h img-mobile">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/desktop-head.svg" alt="" class="desktop-footer fh fix-h img-desktop">
            </div>
        </header>
        <? endif; ?>