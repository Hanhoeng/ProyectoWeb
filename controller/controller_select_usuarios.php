<?php
include("../models/class_usuarios_dal.php");
if(isset($_POST['id'])){
   $id=  $_POST['id'];
   //echo $id;
      $output='';      
      $metodos_usuario=new usuarios_dal;
      $result_usuario=$metodos_usuario->usuario_por_id($id);
      
        $ID=$result_usuario->getID();
        $Nombre=utf8_encode($result_usuario->getNOMBRE());
        $Contraseña=utf8_encode($result_usuario->getCONTRASEÑA());

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
                     <td width="30%"><label>Contraseña Usuario:</label></td>  
                     <td width="70%">'.$Contraseña.'</td>  
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