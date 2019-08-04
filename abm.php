<?php
require_once ("funciones.php");
require_once ("helpers.php");
require_once("loader.php");
include ("nav_bar.php");

$usuarios = Query::listado($pdo,"users");
?>

<br>
<h2 class="text-center"> Panel de Control</h2>
<br>
<div class="spacer"></div>


<div class="card" style="overflow-x:auto;">
  <h3 class="card-header">Usuarios</h3>
<table class="table">

  <thead>
      <tr>
          <th>
              Id
          </th>
          <th>
              Nombre
          </th>
          <th>
              Apellido
          </th>
          <th>
              Email
          </th>
          <th>
              Perfil
          </th>
          <th>
              Ver
          </th>
          <th>
              Editar
          </th>
          <th>
              Eliminar
          </th>
      </tr>
  </thead>
  <tbody>
      <?php foreach ($usuarios as $key => $usuario) :?>
      <tr>
          <td>
              <?= $usuario['id'];?>
          </td>
          <td>
              <?= $usuario['nombre'];?>
          </td>
          <td>
              <?= $usuario['apellido'];?>
          </td>
          <td>
              <?= $usuario['email'];?>
          </td>
          <td>
              <?= $usuario['perfil'];?>
          </td>
          <td>
              <a href="perfilUsuario.php?id= <?= $usuario['id'];?>">Ver</a>
          </td>
          <td>
              <a href="editarUsuario.php?id= <?= $usuario['id'];?>">Editar</a>
          </td>
          <td>
              <a href="eliminarUsuario.php">Eliminar</a>
          </td>

      </tr>
      <?php endforeach;?>


  </tbody>


</table>
</div>
<div class="spacer"></div>


<br>
<div class="card" style="overflow-x:auto;">
  <h3 class="card-header">Productos<h3>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Productos</th>
      <th scope="col">Clase</th>
      <th scope="col">Imagen</th>
      <th scope="col">Modificaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td><i class="fas fa-file-upload"></i> <i class="fas fa-minus-circle"></i></td>
      <td><i class="far fa-edit"></i> <i class="fas fa-dollar-sign"></i> <i class="far fa-trash-alt"></i> </td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><i class="fas fa-file-upload"></i> <i class="fas fa-minus-circle"></td>
      <td><i class="far fa-edit"></i> <i class="fas fa-dollar-sign"></i> <i class="far fa-trash-alt"></i></i></td>
    </tr>
    <tr>
      <td> Larry the Bird </td>
      <td> blah </td>
      <td><i class="fas fa-file-upload"></i> <i class="fas fa-minus-circle"></td>
      <td><i class="far fa-edit"></i> <i class="fas fa-dollar-sign"></i> <i class="far fa-trash-alt"></i></td>
    </tr>
    <tr>
      <td>
    <i class="far fa-plus-square"></i>
      </td>
    </tr>
  </tbody>
</table>
</div>
