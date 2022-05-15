<?php
include("../models/class_usuarios_dal.php");
if(isset($_POST['usuario_id'])){
   $id=  $_POST['usuario_id'];
   //echo $id;
      $output='';      
      $metodos_usuario=new usuarios_dal;
      $result_usuario=$metodos_usuario->usuario_por_id($id);
      //foreach ($result_usuario as $key => $value) {
        $arreglo=array(
        "Id"=>$result_usuario->getID(),
        "Nombre"=>$result_usuario->getNOMBRE(),
        "Contraseña"=>$result_usuario->getCONTRASEÑA()
        );


//}
      $arreglo = array_map('utf8_encode',$arreglo);
      echo json_encode($arreglo,JSON_UNESCAPED_UNICODE);
}
else{
  echo "no llego correctamente el id, error backend,ver id de egreso en modal";
  exit;  
}
?>