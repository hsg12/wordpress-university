<?php $theme_opts = get_option( 'fu_opts' ); ?>

<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

        <div class="group">

            <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color">
                    <a href="<?php echo esc_url(site_url()); ?>"><strong>Fictional</strong> University</a>
                </h1>
                <?php if ( !empty($theme_opts['facebook']) ) :  ?>
                    <p><strong>Tel:</strong> <?php echo esc_html($theme_opts['phone']); ?></p>
                <?php endif; ?>
            </div>

            <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Explore</h3>
                    <nav class="nav-list">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footerLocationOne',
                        ));
                        ?>
                    </nav>
                </div>

                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Learn</h3>
                    <nav class="nav-list">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footerLocationTwo'
                        ));
                        ?>
                    </nav>
                </div>
            </div>

            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav>
                    <ul class="min-list social-icons-list group">
                        <?php if ( !empty($theme_opts['facebook']) ) :  ?>
                            <li><a href="<?php echo esc_html($theme_opts['facebook']); ?>" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if ( !empty($theme_opts['twitter']) ) :  ?>
                            <li><a href="<?php echo esc_html($theme_opts['twitter']); ?>" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if ( !empty($theme_opts['youtube']) ) :  ?>
                            <li><a href="<?php echo esc_html($theme_opts['youtube']); ?>" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if ( !empty($theme_opts['linkedin']) ) :  ?>
                            <li><a href="<?php echo esc_html($theme_opts['linkedin']); ?>" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if ( !empty($theme_opts['instagram']) ) :  ?>
                            <li><a href="<?php echo esc_html($theme_opts['instagram']); ?>" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>