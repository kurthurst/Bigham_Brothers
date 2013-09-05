<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;

            wp_title( '|', true, 'right' );

            // Add the blog name.
            bloginfo( 'name' );

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";

            // Add a page number if necessary:
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ); ?></title>
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
        <style type="text/css">
            .no-fouc {display: none;}
        </style>
        <script type="text/javascript">
          document.documentElement.className = 'no-fouc';
        </script>   
        <?php wp_head(); ?>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/fancybox/jquery.fancybox.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/global.css" type="text/css" />
        <script src="<?php bloginfo(template_url); ?>/fancybox/jquery.fancybox.pack.js"></script>
        <script src="<?php bloginfo(template_url); ?>/js/fitvids-ck.js"></script>
        <script src="<?php bloginfo(template_url); ?>/js/main-ck.js"></script>
    </head>
    <body>
        <div class="grid main-wrapper claustrophobic">
            <div class="row clearfix header">
                <div class="c6 logo">
                    <h1><a href="<?php bloginfo(url); ?>" title="<?php bloginfo(name); ?>"><img src="<?php bloginfo(template_url); ?>/img/logo.jpg" alt="<?php bloginfo(name); ?>"/></a></h1>
                </div>
                <div class="c6 search end">
                             <div class="clearfix top-links">
                                <?php wp_nav_menu( array( 'theme_location' => 'top-links', 'container_class' => 'menu-top desktop')); ?>
                            </div>
                            <div class="clearfix searchform">
                                <?php get_search_form(); ?>
                            </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="c12">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu-primary desktop') ); ?>
                </div>
            </div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
