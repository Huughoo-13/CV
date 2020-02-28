<article class="contenido">
    <?=
    anchor('productos','Volver al listado')
    ?>
    <form action="<?= BASE_URL(); ?>productos/actualizar_carrito"method="post">
        <table class="carrito">
            <tr>
                <th>Nombre del producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?PHP
            $i = 1;
            foreach ($this->cart->contents() as $Item):
            ?>
            <input type="hidden" name="<?= $i?>[rowid]" value="<?=$Item['rowid'];?>">
            <tr>
                <td>
                    <?=$Item['name'];
                    if($this->cart->has_options($Item['rowid'])=== TRUE):
                    ?>
                    <P>
                        <?PHP 
                        foreach ($this->cart->product_options($Item['rowid']) as $option_name => $option_value):
                            ?>
                        <strong><?=$option_name;?>:</strong> <?= $option_value;?><br />
                        <?php endforeach;?>
                    </P>
                    <?PHP endif;?>
                </td>
                <td>$<?= number_format($Item['price'],2,',','.');?></td>
                <td>
                    <input type="text" name="<?= $i;?>[qty]" value="<?=$Item['qty'];?>"maxlength="3" size="5">
                </td>
                <td>$<?= number_format($Item['subtotal'],2,',','.');?></td>
            </tr>
            <?PHP 
            $i++;
            endforeach;
            ?>
            <tr>
                <td colspan="2">
                    <input type="submit" name="actualizar" value="Actualizar carrito">
                    <?= anchor('productos/vaciar_carrito','vaciar Carrito');?>
                </td>
                <td>Total:</td>
                <td>$ <?= number_format($this->cart->total(),2,',','.');?></td>
            </tr>
        </table>
    </form>
</article>