<?php
    $servicos = get_field('servicos');
    $lista_servicos = $servicos['lista_servicos'];
    if( $servicos ):
?>
<section id="servicos">

    <div class="grid-container">

        <div class="grid-x grid-padding-x">

            <div class="cell small-12 servicos-title">

                <h2><?php echo $servicos['titulo']; ?></h2>

                <p><?php echo $servicos['descricao']; ?></p>

            </div>

            <div class="cell small-12">

                <div class="grid-x grid-margin-x">

                    <?php foreach($lista_servicos as $lista_servicos) { ?>
                    <div class="cell small-12 large-4 service-box">

                        <img src="<?php echo esc_url( $lista_servicos['icone']['url'] ); ?>" alt="<?php echo esc_attr( $lista_servicos['icone']['alt'] ); ?>">

                        <h3><?php echo $lista_servicos["titulo"]; ?></h3>

                        <p><?php echo $lista_servicos["descricao"]; ?></p>

                    </div>
                    <?php } ?>
                    
                </div>

            </div>

        </div>

    </div>

</section>
<?php endif; ?>