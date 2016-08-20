<?php
// Inicializar la sesión.
	session_start();
?>
<head>
    <meta charset="utf-8">
    <title>Crear Demo</title>
</head>
<?php

require '../modelo/colectordemo.php';
if(isset($_POST["nombre"])){
  $vCollector = new DemoCollector();
  $demo = new demo();
  $demo->setId(123);
  $demo->setNombre($_POST["nombre"]);
  $uploaddir = '../fotos/';
  $pagedir = '../fotos/'. basename($_FILES['userfile']['name']);
  $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
  if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name'] != ""){
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  
      $demo->setFoto($pagedir);
  
          if($vCollector->addDemo($demo)){
            //var_dump($obj);
  
           echo "Registro creado con éxito, <a href='demoindex.php'>Ir a la administracion de Demo</a> ";
          }else{
              echo "Hubo un error al intentar actualizar el Demo1.";
          }
    } else {
        echo "Error al subir la imagen\n <a href='demoindex.php'>Ir a la administracion de Demo</a> ";
    }
  }else{
      if($vCollector->addDemo($demo)){
          //var_dump($obj);
          echo "Registro creado con éxito, <a href='demoindex.php'>Ir a la administracion de Demo</a> ";
        }else{
            echo "Hubo un error al intentar agregar el Demo2.";
        }
    }
}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="creardemo.php" method="post">
      <div>
        <label for="name">Crear nuevo demo </label>
        <input type="text" name="nombre" value=""><br>
      </div>
      <div>
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        Foto de perfil: <input name="userfile" type="file" />
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }
