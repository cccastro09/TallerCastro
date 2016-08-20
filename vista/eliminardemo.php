<?php
// Inicializar la sesión.
	session_start();
?>

<?php
ini_set('display_errors', 1);
require '../modelo/colectordemo.php';

    $coll = new DemoCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->deleteDemo($_GET["id"]);
}else{
  echo "Valor no enconteado.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Eliminar Demo</title>
</head>
    <body>
    <a href="demoindex.php">Registro eliminado, Ir a la administracion de Demo</a>
    </body>
</html>
