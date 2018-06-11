<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php get_template_part('header-title'); ?>


        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" type="text/css" />

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css" type="text/css" />

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <?php custom_seo_meta();?>
        <?php wp_head(); ?>
    </head>
    <body>




<header id="top-head">
    <div class="inner">

        <div id="mobile-head">
            <h1 class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <div id="nav-toggle">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <nav id="global-nav">


          <nav>
              <?php wp_nav_menu( array(
                      'theme_location'=>'headmenu',
                      'container'     =>'',
                      'menu_class'    =>'',
                      'items_wrap'    =>'<ul>%3$s</ul>'));
              ?>
          </nav>



        </nav>

    </div>
</header>



<div id="wrapper">
