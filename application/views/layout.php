<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Index Productos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>estilos/css.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body >
  <div  class="main">
    <div class="menu">
       <div><a href="<?php echo base_url()?>insercion_prod">Ingreso de productos</a></div>
       <div><a href="<?php echo base_url()?>MostrarProductos/mostrarProds">Mostrar Productos</a></div>
    </div>
    
    <div class="layout" >
      
        <?php
        
        if(isset($mensaje)){
            echo "<h3 style=color:green>".$mensaje."</h3>";
        }

        if(isset($aviso)){
            echo "<h3 style=color:green>".$aviso."</h3>";
        }
        
        if(isset($contenedor)){
            echo $contenedor;
        }
        
        ?>

    </div>
 </div> 
</body>
</html>