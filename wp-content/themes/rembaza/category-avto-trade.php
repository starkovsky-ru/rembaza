<?php get_header(); ?>


<div class="wrap avto-trade">
    <div class="container">
        <h1><?php wp_title(); ?></h1>

        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                $images = get_field('gallery');
                ?>
                <div class="col-4">
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
                </div>
            <?php endwhile;
            else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
