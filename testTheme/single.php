<?php
/**
 * Шаблон для одиночного поста
 * (single.php)
 */

get_header(); // Подключение хедера
?>

<main class="single">
    <div class="container single__inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="single__image single__item">
            <!-- Изображение -->
            <?php if (has_post_thumbnail()) : ?>
            <div class="single__thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="single__content single__item">
            <!-- Заголовок -->
            <h1 class="single__title"><?php the_title(); ?></h1>

            <!-- Контент -->
            <div class="single__content">
                <?php the_content(); ?>
            </div>
        </div>





        <?php endwhile; else : ?>
        <p>Извините, запись не найдена.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); // Подключение футера ?>