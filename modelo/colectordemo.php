<?php

  require 'collector.php';
  require 'demo.php';
  class DemoCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addDemo($demo)
   {
       $sql="INSERT INTO demo(nombre, foto) VALUES('".$demo->getNombre()."','".$demo->getFoto()."')";
       /*echo $sql;*/
       print_r(self::execQuery($sql));   
       return true;   
   }

   public function getNombre($id)
   {
    
    $stmt = $this->con->prepare("SELECT * FROM demo WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Demo");
    return $usuario;
   }
   public function readAlldemo(){

      return self::read('demo','demo'); 


  }

   public function updateDemo($demo)
   {
    try
    {
      $sql="UPDATE demo SET id='".$demo->getId()."',nombre='".$demo->getNombre()."' ,foto='".$demo->getFoto()."' WHERE id=".$demo->getId();
      self::execQuery($sql);

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteDemo($demo)
   {
    try
    {
      self::execQuery("DELETE FROM demo WHERE id=".$demo);

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   } 
}
?>
