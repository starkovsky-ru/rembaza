
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $images = get_field('gallery');
    ?>
    <div class="wrap page-tpl">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <div class="row">
            <?php foreach( $images as $image ): ?>
                <div class="col-2">
                    <div class="avto-trade__single-image"
                         style="background-image: url(<?php echo $image['url']; ?>);"
                    ></div>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="avto-trade__single-param">
                <strong>Цена:</strong> <?php the_field('price'); ?>
            </div>
            <div class="avto-trade__single-param">
                <strong>Год выпуска:</strong> <?php the_field('year'); ?>
            </div>
            <div class="avto-trade__single-param">
                <strong>Пробег:</strong> <?php the_field('way'); ?>
            </div>
            <div class="content-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
