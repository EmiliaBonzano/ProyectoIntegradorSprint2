<?php
  require_once("clases/baseDeDatos.php");
  require_once("clases/mysql.php");
  require_once("clases/productos.php");
  require_once("helpers.php");
  require_once("clases/validador.php")

/*
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/ArmarRegistro.php");
require_once("clases/BaseJSON.php");
require_once("clases/Encriptar.php");
require_once("clases/Autenticador.php");
require_once("clases/Query.php");
*/

  $host = "localhost";
  $bd = "sistema_venta";
  $usuario = "root";
  $password = "";
  $puerto = "3306";
  $charset = "utf8mb4";

  $pdo = mysql::conexion($host,$bd,$usuario,$password,$puerto,$charset);

//Agregado por Lu el 22/7
  $validar = new Validador();
  $registro = new ArmarRegistro();
  //$json = new BaseJSON("usuarios.json");
  Autenticador::iniciarSession();

 ?>
