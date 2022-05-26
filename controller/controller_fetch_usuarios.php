<?php
include("../models/class_usuarios_dal.php");
if(isset($_POST['oferta_id'])){
   $id=  $_POST['oferta_id'];
   //echo $id;
      $output='';      
      $metodos_ofertas=new oferta_dal;
      $result_oferta=$metodos_ofertas->datos_por_id($id);
      //foreach ($result_usuario as $key => $value) {
        $arreglo=array(
        "Id"=>$result_usuario->getID(),
        "Nombre"=>$result_usuario->getNOMBRE(),
        "Precio"=>$result_usuario->getPRECIO(),
        "Espacio"=>$result_usuario->getESPACIO(),
        "Cuentas"=>$result_usuario->getPRECIO(),
        "Garantia"=>$result_usuario->getGARANTIA(),
        "Nombre_dominio"=>$result_usuario->getNOMBRE_DOMINIO(),
        "Vencimiento"=>$result_usuario->getVENCIMIENTO(),
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