<?php get_header(); ?>


<div class="wrap services">
    <div class="container">
        <h1><?php wp_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
                <a href="<?php the_permalink(); ?>"
                   class="services-image"
                   style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>);"
                >
                </a>
                <div class="services-content">
                    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                    <div class="content-text">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="button button-primary">Подробнее...</a>
                </div>
            </div>
        <?php
        endwhile;
        else:
            ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
