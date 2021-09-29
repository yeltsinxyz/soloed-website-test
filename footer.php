<?php
    $copyright = get_field('copyright', 'option');
    $info = get_field('info', 'option');
    if( $copyright ) && ($info) :
?>

    <?php wp_footer(); ?>

    <footer>

        <div class="grid-container">

            <div class="grid-x grid-margin-x bottom-line">

                <div class="cell small-12 large-4">

                    <img src="" alt="">

                    <p class="tel">+55 (XX) X-XXXX-XXXX</p>

                    <p class="email">support@soloed.techie</p>

                </div>

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

        <div class="grid-container">

            <div class="grid-x grid-margin-x">

                <div class="cell small-12 large-4">

                    <ul class="menu">
                        <li>LinkedIn</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                    </ul>

                </div>

                <div class="cell small-12 large-4">

                    <?php echo $copyright['brand']; ?>

                </div>

                <div class="cell small-12 large-4">

                    <?php echo $copyright['copyright']; ?>

                </div>

            </div>

        </div>

    </footer>

    </body>
<?php endif; ?>
</html>