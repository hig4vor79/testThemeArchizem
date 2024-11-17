<?php

/* 
Template Name: Home
*/
get_header();
?>
<main class="main home-page">
    <section class="hero">
        <div class="container hero__inner">
            <h1 class="hero__title">
                Широкий спектр архітектурних, землевпорядних, геодезичних і
                консалтингових послуг
            </h1>
            <a href="tel:+38 095 123 45 67" class="btn__green">
                <p>зв’язатись з нами</p>
            </a>
        </div>
    </section>
    <section id="about" class="about section">
        <div class="container about__inner">
            <div class="about__left">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about-1.png" alt="" />
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about-2.png" alt="" />
            </div>
            <div class="about__right">
                <div class="about__content">
                    <h2 class="about__title title">Про нас</h2>
                    <p class="about__text">
                        Lorem ipsum dolor sit amet consectetur. Tristique fringilla
                        bibendum elit quis placerat mauris. Porttitor amet urna ipsum
                        lectus accumsan nibh urna non ipsum. Porttitor fringilla egestas
                        eu scelerisque a tellus. Lorem ipsum dolor sit amet consectetur.
                        <br /><br />
                        Tristique fringilla bibendum elit quis placerat mauris.
                        Porttitor amet urna ipsum lectus accumsan nibh urna non ipsum.
                        Porttitor fringilla egestas eu scelerisque a tellus.
                    </p>
                    <a href="#" class="btn hover">
                        <p>читати більше</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-green.png" alt="" />
                    </a>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about-3.png" alt="" />
            </div>
        </div>
    </section>
    <section class="company section section-grey">
        <div class="container company__inner">
            <h2 class="title company__title">
                компанія в
                <span class="green">цифрах</span>
            </h2>
            <div class="company__wrap">
                <div class="company__image">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/company.png" alt="" />
                </div>
                <div class="company__content">
                    <ul class="company__list">
                        <li class="company__item">
                            <div class="company__number">
                                <span data-number="300"> 300 </span>
                                <p>+</p>
                            </div>
                            <span class="company__grenn"> НАСЕЛЕНИХ ПУНКТІВ </span>
                            <p class="company__text">
                                …де наша компанія виконує розробку містобудівної або
                                землевпорядної документації. Той випадок, коли цифри
                                говорять самі за себе.
                            </p>
                        </li>
                        <li class="company__item">
                            <div class="company__number">
                                <span data-number="100"> 100 </span>
                                <p>+</p>
                            </div>
                            <span class="company__grenn">МІСЦЕВИХ РАД — ЗАМОВНИКІВ </span>
                            <p class="company__text">
                                Ми працюємо в 45-и районах Київської, Одеської,
                                Миколаївської, Херсонської, Житомирської, Полтавської,
                                Івано-Франківської, Донецької областей.
                            </p>
                        </li>
                        <li class="company__item">
                            <div class="company__number">
                                <span data-number="1000"> 1000 </span>
                                <p>+</p>
                            </div>
                            <span class="company__grenn"> КМ² ТОПОГРАФІЇ</span>
                            <p class="company__text">
                                Якість і швидкість — ось основні принципи створення
                                топографічних планів у нашій компанії. Професіоналізм
                                співробітників і першокласне геодезичне обладнання —
                                запорука успіху.
                            </p>
                        </li>
                        <li class="company__item">
                            <div class="company__number">
                                <span data-number="10"> 10 </span>
                                <p>+</p>
                            </div>
                            <span class="company__grenn">ВЛАСНИХ БПЛА</span>
                            <p class="company__text">
                                Ми придбали й успішно застосовуємо в роботі літальні
                                апарати, оснащені високоточними сучасними камерами.
                            </p>
                        </li>
                    </ul>
                    <a href="#" class="btn hover">
                        <p>Дивитись всі</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-green.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="section services">
        <div class="services__inner">
            <h2 class="services__title title">Послуги</h2>
            <div class="services__wrap">
                <div class="services__top">
                    <div class="services__item">
                        <div class="services__overlay"></div>
                        <div class="services__icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-icon.svg" alt="" />
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-1.png" alt="" />
                        <h3 class="services__subtitle">
                            КАТ (відео з накладанням креслень)
                        </h3>
                    </div>
                    <div class="services__item">
                        <div class="services__overlay"></div>
                        <div class="services__icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-icon.svg" alt="" />
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-2.png" alt="" />
                        <h3 class="services__subtitle">
                            BIМ 3д відео (довге з розділами)
                        </h3>
                    </div>
                </div>
                <div class="services__bottom">
                    <div class="services__item">
                        <div class="services__overlay"></div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-3.png" alt="" />
                        <h3 class="services__subtitle">Топографія</h3>
                    </div>
                    <div class="services__item">
                        <div class="services__overlay"></div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-4.png" alt="" />
                        <h3 class="services__subtitle">Землебудівництво</h3>
                    </div>
                    <div class="services__item">
                        <div class="services__overlay"></div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-5.png" alt="" />
                        <h3 class="services__subtitle">Планувальна архітектура</h3>
                    </div>
                    <div class="services__item">
                        <div class="services__overlay"></div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/serv-6.png" alt="" />
                        <h3 class="services__subtitle">ГІС</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="projects section">
        <div class="projects__inner">
            <h2 class="projects__title title">Проекти</h2>
            <div class="projects__wrap">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects.png" alt="" />
                <a href="/projects" class="projects__link container">
                    <p>Дивитись всі проекти</p>
                    <div class="projects__overlay"></div>
                </a>
            </div>
        </div>
    </section>
    <section id="contacts" class="section section-grey customers">
        <div class="container customers__inner">
            <div class="customers_item customers__image">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/customers-map.png" alt="" />
            </div>
            <div class="customers_item customers__content">
                <h2 class="customers__title title">
                    наші <br />
                    <span class="green"> Замовники </span>
                </h2>
                <p class="customers__text">
                    Lorem ipsum dolor sit amet consectetur. Tristique fringilla
                    bibendum elit quis placerat mauris.
                </p>
                <div class="swiper customersSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide customers-slide">
                            <ul>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/1.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/2.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/3.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/4.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/5.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/6.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/7.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/8.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/9.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/10.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/11.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/12.png" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide customers-slide">
                            <ul>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/1.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/2.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/3.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/4.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/5.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/6.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/7.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/8.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/9.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/10.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/11.png" alt="" />
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/12.png" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="customers-pagination"></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>