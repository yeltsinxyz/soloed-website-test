    <?php wp_footer(); ?>

    <footer>

        <div class="grid-container">

            <div class="grid-x grid-margin-x bottom-line">

                <?php
                    $footer = get_field('footer_info', 'option');
                    if( $footer ) :
                ?>
                <div class="cell small-12 large-4">

                    <img src="<?php echo esc_url( $footer['logo'] ); ?>">

                    <p class="tel"><a href="tel:+"<?php echo $footer["telephone"]; ?>><?php echo $footer["telephone"]; ?></a></p>

                    <p class="email"><a href="mailto:<?php echo $footer["email"]; ?>"><?php echo $footer["email"]; ?></a></p>

                </div>
                <?php endif; ?>

                <div class="cell small-12 large-4 menu-footer">

                    <h4>Links</h4>

                    <div class="grid-x grid-margin-x">

                        <div class="cell small-6">

                            <?php
                            wp_nav_menu( array(
                                'menu'  =>  'primaryfooter',
                                'menu_class'    =>  'menu vertical',
                                'container' => false,
                            ) );
                            ?>

                        </div>

                        <div class="cell small-6">

                            <?php
                            wp_nav_menu( array(
                                'menu'  =>  'secondaryfooter',
                                'menu_class'    =>  'menu vertical',
                                'container' => false,
                            ) );
                            ?>
                            
                        </div>

                    </div>

                </div>

                <div class="cell small-12 large-4">

                    <h4>Newsletter</h4>

                    <?php
                    $newsletter = get_field('newsletter', 'option');
                    if( $newsletter ) :
                    ?>

                    <form data-abide action="https://formsubmit.co/<?php echo $newsletter; ?>" method="post">
                        <div data-abide-error class="sr-only" style="display: none;">
                            Alguns erros foram encontrados.
                        </div>
                    <div class="input-group newsletter">
                        <input class="input-group-field" required type="email" placeholder="Receba atualizações">
                        <div class="input-group-button">
                            <button type="submit" class="button"><span class="dashicons dashicons-arrow-right-alt2"></span></button>
                        </div>
                    </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <div class="grid-container footer-copyright">

            <div class="grid-x grid-margin-x">

                <div class="cell small-12 large-4">

                    <ul class="menu social-network">
                        <?php while(has_sub_field('social_network', 'option')): ?>
                        <li><a href="<?php the_sub_field('link'); ?>" target="_blank"><span class="dashicons <?php the_sub_field('icone'); ?>"></span></a></li>
                        <?php endwhile; ?>
                    </ul>

                </div>

                <?php
                    $copyright = get_field('copyright', 'option');
                    if( $copyright ) :
                ?>
                <div class="cell small-12 large-4 brand">

                    <?php echo $copyright['brand']; ?>

                </div>

                <div class="cell small-12 large-4 copyright">

                    <?php echo $copyright['copyright']; ?>

                </div>
                <?php endif; ?>

            </div>

        </div>

    </footer>

    </body>

</html>