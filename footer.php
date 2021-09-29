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

                <div class="cell small-12 large-4">

                    <h4>Links</h4>

                    <ul class="menu">
                        <li>Produtos</li>
                        <li>Informações</li>
                        <li>Quem Somos</li>
                        <li>Preços</li>
                    </ul>

                </div>

                <div class="cell small-12 large-4">

                    <h4>Newsletter</h4>

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