<?php

include_once('Mueble.php');

class Silla extends Mueble{

  public function __construct($id, $sku, $nombre, $precio, $material=null, $alto=null, $ancho=null, $profundidad=null, $descripción=null, $estantes=null){
    $this-> id = $id;
    $this-> sku = $sku;
    $this-> nombre = $nombre;
    $this-> precio = $precio;
    $this->  material = $material;
    $this-> alto = $alto;
    $this-> ancho = $ancho;
    $this-> profundidad = $profundidad;
    $this->  descripcion = $descripcion;
  }


}


 ?>
