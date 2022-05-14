<?php
  session_start();
  include("../models/class_db.php");
  include("../models/class_usuarios_dal.php");
  include("../models/class_usuarios.php");

  if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $obj_usuario = new usuarios(NULL,$_POST["name"],$_POST["password"]);
    $metodos_usuarios = new usuarios_dal;
    $id = $metodos_usuarios->is_correct($obj_usuario->getNOMBRE(),$obj_usuario->getCONTRASEÑA());
    $message = '';

    if($id!=0) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /ProyectoWeb/views/index.php");
    } else {
      $message = 'Las credenciales no coinciden';
      echo $message;
    }
  }
?>