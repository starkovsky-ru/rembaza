
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="wrap page-tpl">
        <div class="container">
            <h1><?php the_title(); ?></h1>

            <div class="content-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
