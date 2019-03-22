<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="<?php echo mix('assets/css/app.css') ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- APP -->
<div id="app">

    <div class="wrap header">
        <div class="container">
            <header>
                <div class="row align-items-center">
                    <div class="inf-item">
                        <a href="/" class="header__logo">
                            <img src="<?php echo THEME_DIR . "/assets/images/logo.png"; ?>" alt="">
                        </a>
                    </div>
                    <div class="inf-item mobile_hide">
                        <div class="inf-item__icon">
                            <i class="fi flaticon-clock"></i>
                        </div>
                        <div class="inf-item__content">
                            <strong><?php the_field('worked-clock-1', 13); ?></strong>
                            <?php the_field('worked-clock-2', 13); ?>
                        </div>
                    </div>
                    <div class="inf-item mobile_hide">
                        <div class="inf-item__icon">
                            <i class="fi flaticon-placeholder"></i>
                        </div>
                        <div class="inf-item__content">
                            <strong><?php the_field('city', 13); ?></strong>
                            <?php the_field('adress', 13); ?>
                        </div>
                    </div>
                    <div class="inf-item">
                        <div class="inf-item__icon mobile_hide">
                            <i class="fi flaticon-smartphone-call"></i>
                        </div>
                        <div class="inf-item__content">
                            <strong>
                                <?php the_field('phone-1', 13); ?>
                            </strong>
                            <strong>
                                <?php the_field('phone-2', 13); ?>
                            </strong>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>

    <div class="wrap nav" v-show="showMenu">
        <div class="container">
            <div class="mobile_show">
                <div class="row align-items-center">
                    <div class="title">НАВИГАЦИЯ</div>
                    <svg xmlns="http://www.w3.org/2000/svg" id="symbol-close" viewBox="0 0 24 24" v-on:click="toogleMenu">
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                    </svg>
                </div>
            </div>
            <div class="row">
                <?php wp_nav_menu(array('theme_location' => 'header_menu', 'container_class' => 'header-nav')); ?>
            </div>
        </div>
    </div>

    <div class="wrap nav-mob">
        <div class="container">
            <a class="button button-primary" href="#" v-on:click="toogleMenu">
                <svg xmlns="http://www.w3.org/2000/svg" id="symbol-menu" viewBox="0 0 24 24">
                    <path
                        d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
                МЕНЮ
            </a>
        </div>
    </div>
