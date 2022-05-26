<?php
include("../models/class_oferta.php");
include("../models/class_oferta_dal.php");
if(isset($_POST['id'])){
   $id=$_POST['id'];
        $metodos_ofertas=new oferta_dal;
        $obj_oferta=new oferta($id,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $cuantos=$metodos_ofertas->borra_oferta($obj_oferta->getID());
      echo $cuantos;
}
else{
  echo "no llego correctamente el id, error backend";
}
?>