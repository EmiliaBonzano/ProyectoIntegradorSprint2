<?php

function dd($variable){
  echo "<pre>";
  var_dump($variable);
  exit;
  echo "</pre>";
}

function persistir($input){
  if (isset($_POST[$input])) {
    return $_POST[$input];
  }
}

//Agregado por Lu 21/7 $ruta o $destino?
function redirect($ruta){
    header("location:".$ruta);
    exit;
}

 ?>
