<?php
/*
Template name: Запись на ремонт
*/
get_header();

?>


<div class="wrap feedback">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2 mobile_hide">
                <img src="/wp-content/uploads/2018/07/Screenshot-at-Jul-24-21-34-04.png" alt="">
            </div>
            <div class="col-2">
                <?php the_content(); ?>
                <div class="feedback__form">
                    <?php echo do_shortcode('[contact-form-7 id="33" title="Записаться на обслуживаение"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
