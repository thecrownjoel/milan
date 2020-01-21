<!DOCTYPE html>
<html lang="en">


    <head>

        <?php wp_head(); ?>
        <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
        

    </head>


<body <?php body_class(); ?> >



<div class="header-container">

    <div class="menu">

    <a href="<?php echo get_option("siteurl"); ?>"><img src="https://i.ibb.co/Q829jPs/milan-logo.png"></a>
        
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )
        ); ?>

        <nav>
        <button class="hamburger hamburger--elastic" type="button"
                aria-label="Menu" aria-controls="navigation" aria-expanded="true/false">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
        </button>

        </nav>

        <div id="navigation" style="display:none">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'md-navigation'
            )
        ); ?>
        </div>


        <ul class="socials">
            <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-spotify"></i></a></li>
        </ul>

    </div>

</div>

