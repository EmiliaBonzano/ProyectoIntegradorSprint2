<?php

abstract class Mueble{
  protected $id;
  protected $sku;
  protected $nombre;
  protected $precio;
  protected $material;
  protected $alto;
  protected $ancho;
  protected $profundidad;
  protected $descripción;

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function getSku(){
    return $this->sku;
  }

  public function setSku($sku){
    $this->sku = $sku;
  }

public function getNombre(){
  return $this->nombre;
}

public function setNombre($nombre){
  $this->nombre = $nombre;
}

public function getPrecio(){
  return $this->precio;
}

public function setPrecio($precio){
  $this->precio = $precio;
}

public function getMaterial(){
  return $this->material;
}

public function setId($material){
  $this->material = $material;
}

public function getAlto(){
  return $this->alto;
}

public function setAlto($alto){
  $this->alto = $alto;
}

public function getAncho(){
  return $this->ancho;
}

public function setAncho($ancho){
  $this->ancho = $ancho;
}

public function getProfundidad(){
  return $this->profundidad;
}

public function setProfundidad($profundidad){
  $this->profundidad = $profundidad;
}

public function getDescripcion(){
  return $this->descripcion;
}

public function setDescripcion($descripción){
  $this->descripcion = $descripción;
}

}


 ?>
