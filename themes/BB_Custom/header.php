<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/global.css" type="text/css" />
    </head>
    <body>
        <div class="grid main-wrapper claustrophobic">
            <div class="row clearfix">
                <div class="c6 logo">
                    <h1><a href="<?php bloginfo(url); ?>" title="<?php bloginfo(name); ?>"><?php bloginfo(name); ?></a></h1>
                </div>
                <div class="c3 top-links">
                    <ul class="menu-top">
                        <li><a href="#">Visit us at trade shows</a></li>
                        <li><a href="#">About our company</a></li>
                    </ul>

                </div>
                <div class="c3 search">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="row clearfix">
                <div class="c8">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu-primary') ); ?>
                </div>
                <div class="c4">
                    <ul class="menu-secondary">
                        <li><a href="#">Build your tool</a></li>
                        <li><a href="/find-a-dealer/">Find a dealer</a></li>
                    </ul>
                </div>
            </div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
