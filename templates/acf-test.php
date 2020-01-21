<?php 

/*
 Template Name: ACF TEST PAGE
 */


?>

<div class="header-container">

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<h1><?php the_field('home_page_header_text'); ?></h1>

<p><?php the_field('home_page_header_description'); ?></p>

<img src="<?php the_field('homepage_header_image'); ?>">

<?php

// check if the repeater field has rows of data
if( have_rows('home_page_button_links') ):

 	// loop through the rows of data
    while ( have_rows('home_page_button_links') ) : the_row(); ?>

    <a target="_blank" href="<?php the_sub_field('button_url'); ?>" ><button type="button" name="button"><?php the_sub_field('button_text'); ?></button></a>
    
<?php endwhile;

else :

    // no rows found

endif;

?>



<ul>
    <li><img src="http://placehold.it/350x150"></li>
    <li><img src="http://placehold.it/350x150"></li>
    <li><img src="http://placehold.it/350x150"></li>
    <li><img src="http://placehold.it/350x150"></li>
    <li><img src="http://placehold.it/350x150"></li>
    <li><img src="http://placehold.it/350x150"></li>
</ul>


</div>


<?php get_footer(); ?>
