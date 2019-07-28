<?php

class Usuario{
  private $nombre;
  private $apellido;
  private $email;
  private $password;
  private $repassword;
  private $avatar;

  public function __construct($email, $password, $repassword=null, $nombre=null, $apellido=null, $avatar=null){
    $this-> email= $email;
    $this-> password = $password;
    $this -> repassword = $repassword;
    $this-> nombre = $nombre;
    $this-> apellido = $apellido;
    $this-> avatar = $avatar;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function getRepassword(){
    return $this->repassword;
  }

  public function setRepassword($repassword){
    $this->repassword = $repassword;
  }

  public function getNombre(){
        return $this->nombre;
    }
  public function setNombre($nombre){
        $this->nombre = $nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setAvatar($avatar){
    $this->avatar = $avatar;
  }


}


 ?>
