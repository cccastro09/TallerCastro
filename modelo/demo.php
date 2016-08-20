<?php

 class Demo {
  
  private $id;
  private $nombre;
  private $foto;

  
  public function __construct(){
    
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function getNombre(){
    return $this->nombre;
  }
  
   
  public function setId($id){
    $this->id = $id;
  }
  
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  
  public function getFoto(){
    return $this->foto;
  }
     
  public function setFoto($foto){
    $this->foto = $foto;
  }
  
  
}
