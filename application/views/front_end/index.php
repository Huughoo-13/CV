<section class="contenido">
    <h1>aplicacion dinamica codeIgniter</h1>
    <?PHP
    foreach ($articulos as $Item):
        $url = 'articulo/' . $Item->id_articulo . '/';
        //$url = 'articulo/';
        $url .= url_title(convert_accented_characters($Item->nombre_articulo), '-', TRUE);
        ?>
        <h3>
            <?= anchor($url, $Item->nombre_articulo); ?>
        </h3> 
        <strong>Fecha de publicacion</strong> <?= $Item->fecha_articulo; ?>
        <p><?= $Item->contenido_articulo; ?></p>
        <hr>
        <?php
    endforeach;
    ?>
</section>