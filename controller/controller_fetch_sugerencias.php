<?php
include("../models/class_sugerencias_dal.php");
if(isset($_POST['sugerencia_id'])){
   $id=  $_POST['sugerencia_id'];
   //echo $id;
      $output='';      
      $metodos_sugerencia=new sugerencias_dal;
      $result_sugerencia=$metodos_sugerencia->datos_por_id($id);
      //foreach ($result_usuario as $key => $value) {
        $arreglo=array(
        "Id"=>$result_sugerencia->getID(),
        "Nombre"=>$result_sugerencia->getNOMBRE(),
        "Correo"=>$result_sugerencia->getCorreo(),
        "Sugerencia"=>$result_sugerencia->getSUGERENCIA()
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