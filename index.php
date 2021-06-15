<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 
<div class="content">
  <div class="container">
    <? the_content(); ?>
  </div>
</div>

<? get_footer(); ?> 
