<?php
include("../models/class_planes.php");
include("../models/class_planes_dal.php");
if(isset($_POST['id'])){
   $id=$_POST['id'];
        $metodos_plan=new planes_dal;
        $obj_plan=new plan($id,NULL);
        $cuantos=$metodos_plan->borrar_plan($obj_plan->getID());
      echo $cuantos;
}
else{
  echo "no llego correctamente el id, error backend";
}
?>