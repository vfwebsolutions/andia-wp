<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--
     _____ _    _          _ _         _                 _       ___
    |_   _| |  |/         | | |       | |               | |     |_  |
      | | | |_ ___    __ _| | |   __ _| |__   ___  _   _| |_      | | ___  ___ _   _ ___
      | | | __/ __|  / _` | | |  / _` | '_ \ / _ \| | | | __|     | |/ _ \/ __| | | / __|
     _| |_| |_\__ \ | (_| | | | | (_| | |_) | (_) | |_| | |_  /\__/ /  __/\__ \ |_| \__ \
     \___/ \__|___/  \__,_|_|_|  \__,_|_.__/ \___/ \__,_|\__| \____/ \___||___/\__,_|___/
-->
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title>Andia - Responsive Agency Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        
        <?php 
            global $data; //fetch options stored in $data
            
            if ($data['logo_upload'] != NULL) {
        ?>
            <style type="text/css">
                .brand {
                    background: url("<?php echo $data['logo_upload']; ?>") center no-repeat;
                }
            </style>
        <?php
            } else {
        ?>
            <style type="text/css">
                .brand {
                    background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png) center no-repeat ;
                }
            </style>
        <?php
            }
        ?>
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="<?php echo home_url(); ?>"> <?php echo bloginfo( 'name' ); echo " | "; echo bloginfo( 'description' ) ;?></a>
                            </h1>

                                <?php wp_nav_menu( array(
                                    'theme_location'  => 'main-menu',
                                    'container'       => 'div', 
                                    'container_class' => 'nav-collapse collapse', 
                                    'menu_class'      => 'nav pull-right',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                 ) ) ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>