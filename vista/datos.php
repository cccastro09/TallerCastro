<?php
// Inicializar la sesión.
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  	<meta charset="utf-8">
	<title>Datos</title>
</head>
<body>
<header>
</header>
<section id="main">

<?php 
$_SESSION['usuario'] = $_POST['Usuario'];
echo "Administracion  ";
echo "Bienvenido Usuario " .$_SESSION['usuario'];


//print_r($_REQUEST);
?>
<a href="destruyesesion.php">Salir</a>
</section>


<form action ="demoindex.php" method ="post">
	  <fielset>
	  	<button type ="submit"> Demo </button>
        <button type ="submit"> Usuario </button>
        <button type ="submit"> Ciudad </button>
        <button type ="submit"> Pais </button>
	  </fielset>

</body>
</html>








