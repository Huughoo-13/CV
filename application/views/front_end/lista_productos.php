<article class="contenido">
    <?=
    anchor('carrito','Ver carrito');
    ?>
    <hr>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Opciones</th>
            <th>cantidad</th>
            <th></th>
        </tr>
        <form action="<?PHP echo BASE_URL();?>productos/agregar_carrito" method ="post">
            <tr>
                <td>
                    cod_001
                    <input type="hidden" name="id_producto" value="cod_001">
                </td>
                <td>
                    Franelas
                    <input type="hidden" name="nombre_producto" value="Franelas">
                </td>
                <td>
                    $100 
                    <input type="hidden" name="precio_producto" value="100">
                </td>
                <td>
                    <select name="opciones[talla]">
                        <option value="" selected="selected">SELECCIONE</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <select name="opciones[color]">
                        <option value="" selected="selected">SELECCIONE</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Negro">Negro</option>
                        <option value="Azul">Azul</option>
                    </select>
                </td>
                <td>
                    <input type="text"name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
        <form action="<?= BASE_URL(); ?>productos/agregar_carrito" method="post">
            <tr>
                <td>
                    cod_054
                    <input type="hidden" name="id_producto" value="cod_054">
                </td>
                <td>
                    Zapatos
                    <input type="hidden" name="nombre_producto" value="Zapatos">
                </td>
                <td>
                    $200
                    <input type="hidden" name="precio_producto" value="200">
                </td>
                <td>
                    <select name="opciones[marca]">
                        <option value="" selected="selected">SELECCIONE</option>
                        <option value="Nike">Nike</option>
                        <option value="Puma">Puma</option>
                        <option value="Adidas">Adidas</option>
                    </select>
                    <select name="opciones[talla]">
                        <option value="" selected="selected">SELECCIONE</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </td>
                <td>
                    <input type="text"name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
        <form action="<?= BASE_URL(); ?>productos/agregar_carrito" method="post">
            <tr>
                <td>
                    cod_769
                    <input type="hidden" name="id_producto" value="cod_769">
                </td>
                <td>
                    Laptop
                    <input type="hidden" name="nombre_producto" value="Laptop">
                </td>
                <td>
                    $4000
                    <input type="hidden" name="precio_producto" value="4000">
                </td>
                <td></td>
                <td>
                    <input type="text"name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
    </table>
</article>
