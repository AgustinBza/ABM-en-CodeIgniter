<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1>Ingreso de productos</h1>

<form action="<?php echo base_url()?>insercion_prod/ingreso" method="POST">
    <div>
        <label> <strong>Producto:</strong></label><br>
        <input type="text" name="nombre">
        <div class="requerido">
            <?php echo form_error('nombre') ?>
        </div>
    </div><br>

    <div>
        <label> <strong>Descripcion:</strong></label><br>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        <div class="requerido">
            <?php echo form_error('descripcion') ?>
        </div>
    </div><br>

    <div>
        <label> <strong>Precio unitario:</strong></label><br>
        <input type="number" name="precio">
        <div class="requerido">
            <?php echo form_error('precio') ?>
        </div>
    </div><br>
  
    <div>
        <label><strong>Categoria: </strong></label><br>
        <select name="categoria">
            <option >BEBIDAS ALCOHOLICAS</option>
            <option >BEBIDAS SIN ALCOHOL</option>
            <option >GOLOSINAS</option>
            <option >TABACO</option>
            <option >PAPAS FRITAS</option>
            <option >CIGARRILLOS</option>
            <option >ENCENDEDORES</option>
        </select>
    </div> <br>

    <div>
        <label> <strong>Cantidad:</strong></label><br>
        <input type="number" name="cantidad">
        <div class="requerido">
            <?php echo form_error('cantidad') ?>
        </div>
    </div>

    <br>
    <div>
        <input type="submit" name="enviar" value="Ingresar">
        <input type="reset" name="cancelar" value="Cancelar">
    </div>
</form>