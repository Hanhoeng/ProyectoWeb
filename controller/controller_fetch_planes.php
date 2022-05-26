<?php
include("../models/class_planes_dal.php");
if(isset($_POST['usuario_id'])){
   $id=  $_POST['usuario_id'];
   //echo $id;
      $output='';      
      $metodos_plan=new planes_dal;
      $result_plan=$metodos_plan->datos_por_id($id);
      //foreach ($result_usuario as $key => $value) {
        $arreglo=array(
        "Id"=>$result_plan->getID(),
        "Id Usuario"=>$result_plan->getID_USUARIO(),
        "Id Oferta"=>$result_plan->getID_OFERTA(),
        "Fecha de registro"=>$result_plan->getFECHA_REGISTRO()
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