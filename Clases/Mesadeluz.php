<?php

include_once('Mueble.php');

class Mesadeluz extends Mueble{
  private $cajones;

  public function __construct($id, $sku, $nombre, $precio, $material=null, $alto=null, $ancho=null, $profundidad=null, $descripción=null, $cajones=null){
    $this-> id = $id;
    $this-> sku = $sku;
    $this-> nombre = $nombre;
    $this-> precio = $precio;
    $this->  material = $material;
    $this-> alto = $alto;
    $this-> ancho = $ancho;
    $this-> profundidad = $profundidad;
    $this->  descripcion = $descripcion;
    $this-> cajones = $cajones;
  }

  public function getCajones(){
    return $this->cajones;
  }

  public function setCajones($cajones){
    $this->cajones = $cajones;
  }

}

 ?>
