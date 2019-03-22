<div class="wrap footer">
    <div class="container">
        <footer>
            <div class="row align-items-center">
                <a href="/" class="footer__logo">
                    <img src="<?php echo THEME_DIR . "/assets/images/logo__footer.png"; ?>" alt="">
                </a>
                <div class="inf-item">
                    <div class="inf-item__icon">
                        <i class="fi flaticon-smartphone-call"></i>
                    </div>
                    <div class="inf-item__content">
                        <strong>
                            <?php the_field('phone-1', 13); ?>
                        </strong>
                        <strong>
                            <?php the_field('phone-2', 13); ?>
                        </strong>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

</div>
<!-- /APP -->

<script src="<?php echo mix('assets/js/manifest.js') ?>" defer></script>
<script src="<?php echo mix('assets/js/vendor.js') ?>" defer></script>
<script src="<?php echo mix('assets/js/app.js') ?>" defer></script>


<?php wp_footer(); ?>

</body>
</html>
