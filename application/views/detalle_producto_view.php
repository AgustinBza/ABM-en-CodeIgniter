<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>Detalle del producto</h1>
<br><br>
<?php
foreach($producto as $indice => $valor){
?>
             
        <p> <strong>COD_<?php echo $valor['id'] ?></strong></p><br>
       
        <form action="<?php echo base_url()?>edicion_producto/editar" method="POST">           
                <input type="hidden" name="id" value="<?php echo $valor['id'] ?>">
                <label for=""><strong>Nombre:</strong> <?php echo $valor['nombre'] ?></label>
                <input type="text" name='nombre' required>
                <input type="submit" value="Editar">
                <br><br>
        </form>
        
        <form action="<?php echo base_url()?>edicion_producto/editar" method="POST">              
                <input type="hidden" name="id" value="<?php echo $valor['id'] ?>">
                <label><strong> Descripcion:</strong> <?php echo $valor['descripcion']?></label><br>
                <textarea name="descripcion" id="" cols="30" rows="10" required></textarea><br>
                <input type="submit" value="Editar">
                <br><br>
        </form>
        
        <form action="<?php echo base_url()?>edicion_producto/editar" method="POST">           
                <input type="hidden" name="id" value="<?php echo $valor['id'] ?>">
                <label> <strong>Precio: </strong>$<?php echo $valor['precio'] ?></label>
                <input type="number" name='precio' required>
                <input type="submit" value="Editar">
                <br><br>
        </form>

        <form action="<?php echo base_url()?>edicion_producto/editar" method="POST">           
                <input type="hidden" name="id" value="<?php echo $valor['id'] ?>">
                <label> <strong>Categoria:</strong> <?php echo $valor['categoria'] ?></label>
                        <select name="categoria">
                             <option >BEBIDAS ALCOHOLICAS</option>
                             <option >BEBIDAS SIN ALCOHOL</option>
                             <option >GOLOSINAS</option>
                             <option >TABACO</option>
                             <option >PAPAS FRITAS</option>
                             <option >CIGARRILLOS</option>
                             <option >ENCENDEDORES</option>
                     </select>
                <input type="submit" value="Editar">
                <br><br>
        </form>
        
        <form action="<?php echo base_url()?>edicion_producto/editar" method="POST">           
                <input type="hidden" name="id" value="<?php echo $valor['id'] ?>">
                <label> <strong>Stock:</strong> <?php echo $valor['cantidad'] ?> unidades</label>
                <input type="text" name='cantidad' required>
                <input type="submit" value="Editar">
                <br><br>
        </form>

<?php
}
?>