<?php

include_once('Mueble.php');

class Mesa extends Mueble{
  private $material_tapa;

  public function __construct($id, $sku, $nombre, $precio, $material=null, $alto=null, $ancho=null, $profundidad=null, $descripción=null, $material_tapa=null){
    $this-> id = $id;
    $this-> sku = $sku;
    $this-> nombre = $nombre;
    $this-> precio = $precio;
    $this->  material = $material;
    $this-> alto = $alto;
    $this-> ancho = $ancho;
    $this-> profundidad = $profundidad;
    $this->  descripcion = $descripcion;
    $this-> material_tapa = $material_tapa;
  }

  public function getMAterialtapa(){
    return $this->material_tapa;
  }

  public function setMAterialtapa($material_tapa){
    $this->material_tapa = $material_tapa;
  }

}

 ?>
