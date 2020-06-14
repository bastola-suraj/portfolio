<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-pb-sm">
                    <div class="row">
                        <div class="col-md-10">
                            <?php dynamic_sidebar('footer-widget-1'); ?>

                            <p class="colorlib-social-icons">
                                <a href="#"><i class="icon-facebook4"></i></a>
                                <a href="#"><i class="icon-twitter3"></i></a>
                                <a href="#"><i class="icon-googleplus"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php dynamic_sidebar('footer-widget-2'); ?>
                <?php dynamic_sidebar('footer-widget-3'); ?>


            </div>
            <?php dynamic_sidebar('footer-widget-4'); ?>

        </div>
    </div>
</footer>
</div>
<?php
wp_footer();
?>
</body>
</html>