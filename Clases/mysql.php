<?php
  include_once("BaseDeDatos.php");

  class Mysql extends BaseDeDatos {
    static public function conexion ($host,$bd,$usuario,$password,$puerto,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$bd.";"."port=".$puerto.";"."charset=".$charset;
            $baseDatos = new PDO($dsn,$usuario,$password);
            $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $baseDatos;
        } catch (PDOException $errores) {
            echo "No me pude conectar a la BD ". $errores->getmessage();
            exit;
        }
    }


static public function buscarPorEmail($email,$pdo,$tabla){
     //Aquí hago la sentencia select, para buscar el email, estoy usando bindeo de parámetros por value
     $sql = "select * from $tabla where email = :email";
     // Aquí ejecuto el prepare de los datos
     $query = $pdo->prepare($sql);
     $query->bindValue(':email',$email);
     $query->execute();
     $usuario = $query->fetch(PDO::FETCH_ASSOC);
     return $usuario;
 }


    static public function guardarProducto($pdo, $tabla, $producto){
      $sql = "insert into $tabla (nombre, descripcion, precio) values (:nombre, :descripcion, :precio)";
      $query = $pdo->prepare($sql);
      $query->bindvalue(':nombre', $producto->getNombre());
      $query->bindvalue(':descripcion', $producto->getDescripcion());
      $query->bindvalue(':precio', $producto->getPrecio());
      $query->execute();
    }

    static public function guardarUsuario($pdo,$usuario,$tabla,$avatar){
        $sql = "insert into $tabla (nombre,apellido,email,password,avatar,perfil) values (:nombre,:apellido,:email,:password,:avatar,:perfil )";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nombre',$usuario->getNombre());
        $query->bindValue(':apellido',$usuario->getApellido());
        $query->bindValue(':email',$usuario->getEmail());
        $query->bindValue(':password',Encriptar::hashPassword($usuario->getPassword()));
        $query->bindValue(':avatar',$avatar);
        $query->bindValue(':perfil',1);
        $query->execute();
    }





        public function leer(){
            //A futuro trabajaremos en esto
        }
        public function actualizar(){
            //A futuro trabajaremos en esto
        }
        public function borrar(){
            //A futuro trabajaremos en esto
        }
        public function guardar($usuario){
            //Este fue el método usao para json
        }

}

 ?>
