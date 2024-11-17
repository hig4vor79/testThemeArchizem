<?php

/* 
Template Name: Project
*/
get_header();
?>
<main class="main project-page">
    <section class="page">
        <div class="page__inner">
            <h1 class="page__title title">Проекти</h1>
            <p class="page__text">
                Нижче представлені деякі з робіт, виконаних компанією за останнє півріччя
            </p>
            <ul class="page__filter">
                <li data-category="all">Всі</li>
                <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        if ($category->slug === 'uncategorized') {
                            continue; 
                        }
                        echo '<li data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</li>';
                    }
                ?>
            </ul>
            <ul class="page__list">
                <?php
            $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => -1,
            ]);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $post_categories = get_the_category();
                    $category_classes = '';
                    foreach ($post_categories as $post_category) {
                        $category_classes .= ' ' . esc_attr($post_category->slug);
                    }
                    ?>
                <li class="page__item<?php echo $category_classes; ?>">
                    <a href="<?php the_permalink(); ?>" class="page__link">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/page-item.png"
                            alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                        <div class="page__content">
                            <h3 class="page__subtitle"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </li>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Немає елементів</p>';
            endif;
            ?>
            </ul>
        </div>
    </section>

    <section class="linkin">
        <div class="linkin__inner">
            <div class="container">
                <div class="linkin__title-wrap">
                    <h4 class="linkin__title">Приєднуйтесь до нас на</h4>
                    <img class="linkin__image" src="<?php bloginfo('template_url'); ?>/assets/images/linkin.png"
                        alt="" />
                </div>
                <a href="#" class="linkin__btn hover"> приєднатись </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>