<?php
require_once('loader.php');


$id = $_GET['id'];
$usuario = Query::mostrarUsuario($pdo, "users", $id);
include ("nav_bar.php");
?>
<br>
<h2 class="text-center"> Perfil del Usuario</h2>
<br>
<div class="spacer"></div>



<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <img class="card-img-top" src=imagen/<?= $usuario['avatar']?> alt="Foto de perfil">

            <ul class="list-group list-group-flush">
              <div class="spacer"></div>
                <li class="list-group-item ">Nombre: <?= $usuario['nombre']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Apellido: <?= $usuario['apellido']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Email: <?= $usuario['email']?></li>
                <div class="spacer"></div>
            </ul>

                <a class="btn btn-primary" href="editarUsuario.php?id=<?= $usuario['id']?>">Editar</a>

        </div>
        <a href="abm.php">Volver</a>
    </div>

</div>
