<article class="contenido">
    <?php
    $msj='Este e sun mensaje encriptado';
    echo $msj;
    ?>
    <br>
    <?=$this->encrypt->encode('$msj');?>
</article>