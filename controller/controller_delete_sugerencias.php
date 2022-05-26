<?php
include("../models/class_usuarios.php");
include("../models/class_sugerencias_dal.php");
if(isset($_POST['id'])){
   $id=$_POST['id'];
        $metodos_sugerencias=new sugerencias_dal;
        $obj_sugerencias=new sugerencias($id,NULL);
        $cuantos=$metodos_sugerencias->borra_sugerencia($obj_sugerencias->getID());
      echo $cuantos;
}
else{
  echo "no llego correctamente el id, error backend";
}
?>