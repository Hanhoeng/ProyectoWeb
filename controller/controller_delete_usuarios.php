<?php
include("../models/class_usuarios.php");
include("../models/class_usuarios_dal.php");
if(isset($_POST['id'])){
   $id=$_POST['id'];
        $metodos_usuarios=new usuarios_dal;
        $obj_usuario=new usuarios($id,NULL,NULL);
        $cuantos=$metodos_usuarios->borrar_usuario($obj_usuario->getID());
      echo $cuantos;
}
else{
  echo "no llego correctamente el id, error backend";
}
?>