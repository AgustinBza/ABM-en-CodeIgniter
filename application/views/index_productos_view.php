<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>Listado de productos</h1>
<table>
<?php
foreach($listado as $indice => $valor){
?>
    <tr>
        <td><?php echo $valor['nombre'] ?></td>
        <td style="text-align: center;">$<?php echo $valor['precio'] ?></td>
        <td style="text-align: center;"><a href="<?php echo base_url()?>MostrarProductos/detalle/<?php echo $valor['id']?>">Detalle</a></td>
        <td style="text-align: center;"><a href="<?php echo base_url()?>Eliminar/eliminar_producto/<?php echo $valor['id']?>">Eliminar</a></td>
    </tr>
<?php
}
?>
</table>


