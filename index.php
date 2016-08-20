<?php
// Inicializar la sesión.
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
	<meta charset="utf-8">
	<title> Ingreso de Usuario  </title>
</head>
<body>
<?php
	if(isset($_SESSION['usuario'])){
	   echo "<p> Bienvenido Usuario:(" .$_SESSION['usuario'].")[<a 		href='vista/destruyesesion.php'>Salir</a>]</p>";
	}else{
	?>
	<form action ="vista/datos.php" method ="post">
	  <fielset>
	  	<label> Usuario </label>
		<input type="text" name= "Usuario"/> <br>
		<label> Clave </label>
		<input type="text" name= "Clave"/> <br>
		<button type ="submit"> Autentificar </button>
	  </fielset>
	</form>
	<?php } ?>


</body>
</html>



