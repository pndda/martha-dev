<?  $classes = get_body_class();
        if(in_array('home',$classes)) :?>
<footer>
    <div class="mainPage-footer container">
        <h4>marc martha</h4>
        <p>By Marc Pengel</p>
        <? wp_nav_menu(
                   array(
                       'theme_location' => 'footer-menu', 
                       'menu_id'        => 'footer-nav', 
                       'menu_class'     => 'footer-nav'
                   )
                   );  ?>
    </div>

    <div class="mainPage-img">
        <div class="container">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/martha-logo-mobile-footer.svg" alt="" class="logo-mobile">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/martha-logo-desktop-footer.svg" alt="" class="logo-desktop">
        </div>
    </div>

</footer>
<? else: ?>
    <footer class="footer__pages">
        <div class="container">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/head-mobile.svg" alt="" class="fh fix-f img-mobile">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/desktop-footer.svg" alt="" class="fh fix-f img-desktop">
        </div>
    </footer>
<? endif; ?>

<?php wp_footer(); ?>
<script>
    console.log('- Made By Panadda Manarata')
</script>
</body>

</html>