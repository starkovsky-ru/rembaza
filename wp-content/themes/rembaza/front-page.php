<?php get_header(); ?>

<?php

$images = get_field('slider');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if ($images): ?>
    <div class="slider">
        <?php foreach ($images as $image): ?>
            <div>
                <div class="slider__image"
                     style="background-image: url(<?php echo $image['url']; ?>);"
                >
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<div class="wrap uslugi">
    <div class="container">
        <?php if (have_rows('uslugi')): ?>
            <div class="row">
                <?php while (have_rows('uslugi')) : the_row(); ?>
                    <div class="col-3">
                        <?php the_sub_field('text'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            Блок не заполнен
        <?php endif; ?>
    </div>
</div>


<div class="wrap feedback">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2 mobile_hide">
                <img src="/wp-content/uploads/2018/07/Screenshot-at-Jul-24-21-34-04.png" alt="">
            </div>
            <div class="col-2">
                <div class="feedback__form">
                    <?php echo do_shortcode('[contact-form-7 id="33" title="Записаться на обслуживаение"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="wrap avto-trade-slider">
    <div class="container">
        <div class="title-h2">Автомагазин</div>
        <div class="js-avto-trade-slider">

            <?php

            global $post;

            $args = array(
                'posts_per_page' => 16,
                'offset' => 0,
                'category' => 4
            );

            $categoryposts = get_posts($args);

            foreach ($categoryposts as $post) : setup_postdata($post);

                $images = get_field('gallery');

                //var_dump($images);
                ?>
                <div class="avto-trade__item">
                    <a href="<?php the_permalink(); ?>" class="avto-trade__item-image">
                        <?php echo wp_get_attachment_image($images[0]['ID'], 'medium'); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>" class="title">
                        <?php the_title(); ?>
                    </a>
                    <div class="price">
                        <?php the_field('price'); ?>
                    </div>
                    <div class="year-way">
                        <?php the_field('year'); ?> / <?php the_field('way'); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="button button-primary">
                        Подробнее
                    </a>
                </div>

            <?php endforeach;
            wp_reset_postdata(); ?>

        </div>
    </div>
</div>


<div class="wrap services-front">
    <div class="container">
        <div class="title-h2">Наш блог</div>
        <div class="row">
            <?php

            global $post;

            $args = array(
                'posts_per_page' => 3,
                'offset' => 0,
                'category' => 5
            );

            $categoryposts = get_posts($args);

            foreach ($categoryposts as $post) : setup_postdata($post);
                ?>
                <div class="col-3">
                    <a href="<?php the_permalink(); ?>"
                       class="services-front-image"
                       style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>);"
                    >
                    </a>
                    <div class="services-front-content">
                        <a href="<?php the_permalink(); ?>" class="title">
                            <?php the_title(); ?>
                        </a>
                        <div class="content-text">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="button button-primary">Подробнее...</a>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
