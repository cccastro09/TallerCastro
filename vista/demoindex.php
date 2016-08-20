<?php
// Inicializar la sesión.
	session_start();
?>


<?php
ini_set('display_errors', 1);
require '../modelo/colectordemo.php';

    $colector= new DemoCollector();
?>
<!Doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>Demo</title>
     </head>
     <body>
    

        <table class="datos">
          <?php
          echo "Administracion Demo";
            foreach ($colector->readAllDemo() as $datos) {
                ?>
                    
                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                       <td> <img src="<?php echo $datos->getFoto();?>"/> </td>
                       <td><a href="editardemo.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="eliminardemo.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>
          
          <tr>
            <td colspan=4><a href="creardemo.php">Crear Demo</a></td>
            <td colspan=4><a href="destruyesesion.php">Salir</a></td>
          </tr>
          
</table>
       
</body>


</html>
