<footer class="f-page">
    <div class="container clearfix">
        <?php
        $args = array(
            'theme_location' => 'footer'
        );
        ?>

        <?php wp_nav_menu($args); ?>
        <div class="foot-social">
            <div class="social-icon fr"><a href="http://twitter.com"><img class="social" src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="Twitter"/></a></div>
            <div class="social-icon sec"><a href="http://facebook.com"><img class="social" src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Facebook"/></a></div>
            <div class="social-icon th"><a href="#"><img class="social" src="<?php bloginfo('template_url'); ?>/img/pinterest.png" alt="Pinterest"/></a></div>
            <div class="social-icon"><a href="#"><img class="social" src="<?php bloginfo('template_url'); ?>/img/google.png" alt="Google Plus"/></a></div>
        </div>
        <span class="copy">&copy Copyright 2013 <a href="#"><?php echo bloginfo('name'); ?></a></span>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>