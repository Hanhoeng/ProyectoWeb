<?php
  session_start();
  $user=isset($_POST["name"]) ? $user=strtoupper($_POST["name"]) : $user=null;
  $pass=isset($_POST["password"]) ? $pass=strtoupper($_POST["password"]) : $pass=null;
  if($_POST){
    require_once '../views/php/funciones_php.php';
    $errores=array();
    if(!validaRequerido($user)){
        $errores[]="Usuario llegó vacío";
    }
    if(!validaRequerido($pass)){
        $errores[]="Contraseña llego vacío";
    }
  }

  if(!$errores){
    include("../models/class_usuarios.php");
    include("../models/class_usuarios_dal.php");
    $obj_usuario = new usuarios(NULL,$user,$pass,NULL);
    $metodos_usuarios = new usuarios_dal;
    $id = $metodos_usuarios->is_correct($obj_usuario->getNOMBRE(),$obj_usuario->getCONTRASEÑA());
    if($id!=0){
      $_SESSION['user_id']=$id;
      header("Location: /ProyectoWeb/views/menu_crud.php");
    }else{
      header("Location: /ProyectoWeb/views/Login.php");
    }
  }
?>