<?php
include("../models/class_sugerencias_dal.php");
if(isset($_POST['id'])){
   $id=  $_POST['id'];
   //echo $id;
      $output='';      
      $metodos_sugerencia=new sugerencias_dal;
      $result_sugerencias=$metodos_sugerencia->datos_por_id($id);
      
        $ID=$result_sugerencias->getID();
        $Nombre=utf8_encode($result_sugerencias->getNOMBRE());
        $Correo=utf8_encode($result_sugerencias->getCORREO());
        $Sugerencia=utf8_encode($result_sugerencias->getSUGERENCIA());

$output .= '  
      <div class="table-responsive">  
           <table class="table table-striped">';  
       
           $output .= '  
                <tr>  
                     <td width="30%"><label>ID Usuario:</label></td>  
                     <td width="70%">'.$ID.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nombre Usuario:</label></td>  
                     <td width="70%">'.$Nombre.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Correo Usuario:</label></td>  
                     <td width="70%">'.$Correo.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Sugerencia:</label></td>  
                     <td width="70%">'.$Sugerencia.'</td>  
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