<?php 

/*
 Template Name: Milan Homepage BOB
 */


?>

<?php get_header(); ?>

<div class="main-container">

  <div id="owl-wrapper-1" class="owl-carousel">

    <div class="item">  <img src="https://images.pexels.com/photos/3324720/pexels-photo-3324720.jpeg"></div>
    <div class="item">  <img src="https://images.pexels.com/photos/3324720/pexels-photo-3324720.jpeg"></div>
    <div class="item">  <img src="https://images.pexels.com/photos/3324720/pexels-photo-3324720.jpeg"></div>

  </div>

 

  <div class="main-heading">
    <h2 data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">the latest</h2>
  </div>

</div>


<div class="posts-container">

    <?php

      $args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
      $postslist = get_posts( $args );
      foreach ($postslist as $post) :  setup_postdata($post); ?> 

  <div class="posts-wrapper" data-aos="fade-up" data-aos-duration="1500">

        <div class="the-thumb"><?php the_post_thumbnail('large'); ?></div>

      <div class="line-col">
        <p class="the-date"><?php the_date(); ?></p>
        <div class="the-title"><a href="<?php the_permalink();?>"><h2><?php the_title(); ?>  </h2> </a></div>
        <div class="the-excerpt"><?php the_excerpt(); ?></div>
        <div class="the-btn"><a href="<?php the_permalink();?>">Read more </a></div>
      </div>

  </div>
          

    <?php endforeach; ?>

</div>


<div class="main-container">
  <div class="main-heading">
    <h2 data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">featured videos</h2>
  </div>

  <div id="owl-wrapper-2" class="owl-carousel" data-aos="fade-in" data-aos-duration="1500">

    <div> <img src="https://images.pexels.com/photos/3324720/pexels-photo-3324720.jpeg"></div>
    <div> <img src="https://images.pexels.com/photos/3324720/pexels-photo-3324720.jpeg"></div>
    <div> <img src="https://images.pexels.com/photos/3324720/pexels-photo-3324720.jpeg"></div>
  </div>


  <div id="line-box">
    <div class="vl"></div>
    <img src="https://i.ibb.co/VHTPzts/bird.png" />
  </div>


</div>

<?php get_footer(); ?>
