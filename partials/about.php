<?php
    $sobre = get_field('sobre');
    if( $sobre ):
?>
<section id="sobre">

    <div class="grid-container">

        <div class="grid-x grid-padding-x align-middle">

            <div class="cell large-offset-5 large-7 xxxlarge-offset-0 xxxlarge-12 small-12">

                <h2><?php echo $sobre['titulo']; ?></h2>

                <?php echo $sobre['descricao']; ?>

            </div>

        </div>

    </div>

</section>
<?php endif; ?>