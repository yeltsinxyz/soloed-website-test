<?php
    $hero = get_field('hero');
    if( $hero ):
?>
<section id="main">

    <div class="grid-container">
        
        <div class="grid-x grid-padding-x align-middle">

            <div class="cell medium-5 small-12">

                <h2><?php echo $hero['titulo']; ?></h2>

                <p><?php echo $hero['descricao']; ?></p>

                <a href="<?php echo esc_url( $hero['botao']['url'] ); ?>"><?php echo esc_html( $hero['botao']['title'] ); ?></a>

            </div>

            <div class="cell medium-7 small-12 image-hero">

                <img src="<?php echo esc_url( $hero['imagem']['url'] ); ?>" alt="<?php echo esc_attr( $hero['imagem']['alt'] ); ?>">

            </div>

        </div>

    </div>

</section>
<?php endif; ?>