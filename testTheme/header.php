<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container header__inner">
            <nav>
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#about" class="nav__link">Про нас</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#projects" class="nav__link">Послуги</a>
                    </li>
                    <li class="nav__item">
                        <a href="/projects" class="nav__link">проекти</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#news" class="nav__link">Новини</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#contacts" class="nav__link">Контакти</a>
                    </li>
                </ul>
            </nav>
            <a href="/" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="" />
            </a>
            <span class="lang"><?php echo do_shortcode('[language-switcher]') ?></span>
            <a href="tel:+38 095 123 45 67" class="header__phone hover">+38 095 123 45 67</a>
            <a href="tel:+38 095 123 45 67" class="header__phoneBtn hover">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/phone.svg" alt="" />
            </a>
            <button class="menu">
                <svg width="50" height="50" viewBox="0 0 100 100">
                    <path class="line line1"
                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                    </path>
                    <path class="line line2" d="M 20,50 H 80"></path>
                    <path class="line line3"
                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                    </path>
                </svg>
            </button>
        </div>
        <div class="burger">
            <div class="burger__content">
                <nav>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="<?php echo home_url(); ?>#about" class="nav__link">Про нас</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url(); ?>#projects" class="nav__link">Послуги</a>
                        </li>
                        <li class="nav__item">
                            <a href="/projects" class="nav__link">проекти</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url(); ?>#news" class="nav__link">Новини</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url(); ?>#contacts" class="nav__link">Контакти</a>
                        </li>
                    </ul>
                </nav>
                <span class="lang"><?php echo do_shortcode('[language-switcher]') ?></span>
                <a href="tel:+38 095 123 45 67" class="header__phone hover">+38 095 123 45 67</a>
            </div>
        </div>
    </header>