<?php
    $depoimentos = get_field('depoimentos');
    $lista_depoimentos = $depoimentos['lista_depoimentos'];
    if( $depoimentos ):
?>
<section id="depoimentos">

    <div class="grid-container">

        <div class="grid-x grid-padding-x">

            <div class="cell small-12">

                <h2><?php echo $depoimentos['titulo']; ?></h2>

            </div>

            <div class="cell small-12 swiper depoimentos-lista">

                <div class="grid-x grid-margin-x swiper-wrapper">

                    <?php foreach($lista_depoimentos as $lista_depoimentos) { ?>
                    <div class="cell small-12 large-6 depoimentos-single swiper-slide">

                        <p><?php echo $lista_depoimentos["frase"]; ?></p>

                        <div class="grid-x">
                            <div class="cell shrink">
                                <img src="<?php echo esc_url( $lista_depoimentos['foto']['url'] ); ?>" alt="<?php echo esc_attr( $lista_depoimentos['foto']['alt'] ); ?>">
                            </div>
                            <div class="cell auto">
                                <p class="meta"><?php echo $lista_depoimentos["nome_profissao"]; ?></p>
                            </div>
                        </div>

                    </div>
                    <?php } ?>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </div>

    </div>

</section>
<?php endif; ?>