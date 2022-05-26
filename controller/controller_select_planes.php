<?php
include("../models/class_planes_dal.php");
if(isset($_POST['id'])){
   $id=  $_POST['id'];
   //echo $id;
      $output='';      
      $metodos_planes=new planes_dal;
      $result_planes=$metodos_planes->datos_por_id($id);
      
        $ID=$result_planes->getID();
        $ID_USUARIO=utf8_encode($result_planes->getID_USUARIO());
        $ID_OFERTA=utf8_encode($result_planes->getID_OFERTA());
        $FECHA_REGISTRO=utf8_encode($result_planes->getFECHA_REGISTRO());

$output .= '  
      <div class="table-responsive">  
           <table class="table table-striped">';  
       
           $output .= '  
                <tr>  
                     <td width="30%"><label>ID Usuario:</label></td>  
                     <td width="70%">'.$ID.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>ID Usuario:</label></td>  
                     <td width="70%">'.$ID_USUARIO.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>ID Oferta:</label></td>  
                     <td width="70%">'.$ID_OFERTA.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Fecha Registro:</label></td>  
                     <td width="70%">'.$FECHA_REGISTRO.'</td>  
                </tr> 
           ';
      
      $output .= '  
           </table>  
      </div>  
      ';

       echo $output; 
}
else{
  echo "no llego correctamente el id, error backend,ver id de egreso en modal";
  exit;  
}
?>