<!DOCTYPE html>

<?php
require_once("loader.php");

if (isset($_GET["id"])) {
  $id=$_GET["id"];
  $usuario = Query::mostrarUsuario($pdo, "users", $id);
}
//esto se ejecuta si el usuario indica que desea borrar el usuario
if (isset($_POST["borrar"])&&$_POST["borrar"]=="si") {
    Query::borrarUsuario($pdo,'users',$id);
  header('Location:abm.php');
  exit;
//var_dump($_POST);
}
elseif (isset ($_POST["no"])) {
  header("Location:abm.php");
  exit;
}
include ("nav_bar.php");
 ?>



<div class="card-body">


    <form class="" action="" method="post">
      <p>¿Esta seguro que quiere eliminar al usuario seleccionado?</p>
      <input  type="submit" name="borrar" value="si">
      <input type="submit" name="no" value="no">
      <input type="hidden" name="id" value="<?= $id?>">
   </form>

</div>
