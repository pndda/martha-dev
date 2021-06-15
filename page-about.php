<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?>
<div class="content">
    <div class="container">
        <div class="name">
            <h1>Marc Martha</h1>
            <p>by Marc Pengel</p>
        </div>

        <div class="about-text">
            <? the_content(); ?>
        </div>
        <div class="ft__about">
            <nav>
                <ul>
                    <li>
                        <a href="">get in touch</a>
                    </li>
                    <li>
                        <a href="">instagram</a>
                    </li>
                    <li>
                        <a href="">PR requests</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<? get_footer(); ?>