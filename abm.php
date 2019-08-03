<?php
require_once ("funciones.php");
require_once ("helpers.php");

include ("nav_bar.php")?>

<br>
<h2 class="text-center"> Panel de Control</h2>
<br>
<div class="spacer"></div>


<div class="card" style="overflow-x:auto;">
  <h3 class="card-header">Usuarios</h3>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo de Usuario</th>
      <th scope="col">Modificaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>Administrador</td>
      <td> <i class="fas fa-shopping-cart"></i> <i class="fas fa-user-edit"></i><i class="fas fa-user-slash"></i></td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>User</td>
      <td><i class="fas fa-shopping-cart"></i> <i class="fas fa-user-edit"></i><i class="fas fa-user-slash"></i></td>
    </tr>
    <tr>
      <td> Larry the Bird </td>
      <td> blah </td>
      <td>User</td>
      <td><i class="fas fa-shopping-cart"></i> <i class="fas fa-user-edit"></i><i class="fas fa-user-slash"></i></td>
    </tr>
    <tr>
      <td>
        <a href="register.php">
          <i class="fas fa-user-plus"></i>
        </a>
      </td>
    </tr>
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
