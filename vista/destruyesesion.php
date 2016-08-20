<?php
// Inicializar la sesión.
 	session_start();
?>
<?php
// Finalmente, destruir la sesión.
 if (isset($_SESSION['usuario'])){
	session_destroy();
	echo "La sesion se ha destruido exitosamente <br/>";
	echo "<a href='../index.php'>Volver al ingreso de Usuario</a>";
}else{
	echo "Error..!!<br/>";
	echo "<a href='../index.php'>Volver al ingreso de Usuario</a>";
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Destruir Sesion</title></head>
<body>
</body>
</html>

