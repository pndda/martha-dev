<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 
<div class="content">

    <? the_content(); ?>

</div>

<? get_footer(); ?> 


