<?php
    $depoimentos = get_field('depoimentos');
    $lista_depoimentos = $servicos['lista_depoimentos'];
    if( $depoimentos ):
?>
<section id="depoimentos">

    <div class="grid-container">

        <div class="grid-x grid-padding-x">

            <div class="cell small-12">

                <h2><?php echo $depoimentos['titulo']; ?></h2>

            </div>

            <div class="cell small-12">

            </div>

        </div>

    </div>

</section>
<?php endif; ?>