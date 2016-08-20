<?php

 class Users_prueba {
  
  private $id;
  private $user;

  
  public function __construct(){
    
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function getUser(){
    return $this->user;
  }
  
   
  public function setId($id){
    $this->id = $id;
  }
  
  public function setUser($user){
    $this->user = $user;
  }
  
  
}
