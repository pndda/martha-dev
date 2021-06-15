<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?>

<div class="content">
  <div class="container">
      <div class="name">
          <h1>Marc Martha</h1>
          <p>Marc Pengel</p>
      </div>

      <div class="about-text">
          <? the_content(); ?>
      </div>
      <div class="ft__about">
      <? wp_nav_menu(
                   array(
                       'theme_location' => 'footer-menu', 
                       'menu_id'        => 'footer-nav', 
                       'menu_class'     => 'footer-nav'
                   )
                   );  ?>
      </div>
  </div>
</div>

<? get_footer(); ?>


