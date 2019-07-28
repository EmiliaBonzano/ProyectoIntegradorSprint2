<?php
include_once("loader.php");
if($_POST){
  $producto = new Producto($_POST["nombre"], $_POST["descripcion"], $_POST["precio"]);
  //Ver qué otra info hay que pasar a la base de datos
  Mysql::guardarProducto($pdo, 'productos', $producto);
  redirect('listadoProductos.php');
}


 ?>
