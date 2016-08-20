<?php
// Inicializar la sesión.
	session_start();
?>
<head>
<meta charset="utf-8">
<title>Editar Demo</title>
</head>
<?php
ini_set('display_errors', 1);
require '../modelo/colectordemo.php';

    $coll = new DemoCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->getNombre($_GET["id"]);

    ?>
    <form enctype="multipart/form-data" action="editardemo.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="name">Usuario de Demo</label>
            <input type="text" name="nombre" value="<?php echo $obj->getNombre();?>"><br>
      </div>
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        Imagen de perfil: <input name="userfile" type="file" />
        <div class="button">
            <button type="submit">Actualizar</button>
        </div>
    </form>
   
   <?php 
}else if(isset($_POST["id"]) && isset($_POST["nombre"])){
    
    $obj = new Demo();
    $obj->setId($_POST["id"]);
    $obj->setNombre($_POST["nombre"]);
    $uploaddir = '../fotos/';
    $pagedir = '../fotos/'. basename($_FILES['userfile']['name']);
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name'] != ""){
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  
      $obj->setFoto($pagedir);
  
          if($coll->updateDemo($obj)){
        echo "Demo actualizado con éxito, <a href='demoindex.php'>Ir a la administracion de Demo</a> ";
    }else{
        echo "Hubo un error al intentar actualizar el Demo.";
    }
    } else {
        echo "Error al subir la imagen\n";
    }
  }
    else{
    if($coll->updateDemo($obj)){
        echo "Demo actualizado con éxito sin imagen, <a href='demoindex.php'>Ir a la administracion de Demo</a> ";
    }else{
        echo "Hubo un error al intentar actualizar el Demo.";
    }
    }
}else{
    echo "derp.";
}
