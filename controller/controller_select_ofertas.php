<?php
include("../models/class_oferta_dal.php");
if(isset($_POST['id'])){
   $id=  $_POST['id'];
   //echo $id;
      $output='';      
      $metodos_oferta=new oferta_dal;
      $result_oferta=$metodos_oferta->datos_por_id($id);
      
        $ID=$result_oferta->getID();
        $Nombre=utf8_encode($result_oferta->getNOMBRE());
        $Precio=utf8_encode($result_oferta->getPRECIO());
        $Espacio=utf8_encode($result_oferta->getESPACIO());
        $Cuentas=utf8_encode($result_oferta->getCUENTAS());
        $Garantia=utf8_encode($result_oferta->getGARANTIA());
        $Nombre_Dominio=utf8_encode($result_oferta->getNOMBRE_DOMINIO());
        $Vencimiento=utf8_encode($result_oferta->getVENCIMIENTO());

$output .= '  
      <div class="table-responsive">  
           <table class="table table-striped">';  
       
           $output .= '  
                <tr>  
                     <td width="30%"><label>ID Oferta:</label></td>  
                     <td width="70%">'.$ID.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nombre Oferta:</label></td>  
                     <td width="70%">'.$Nombre.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Precio:</label></td>  
                     <td width="70%">'.$Precio.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Espacio:</label></td>  
                     <td width="70%">'.$Espacio.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Cuentas:</label></td>  
                     <td width="70%">'.$Cuentas.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Garantia:</label></td>  
                     <td width="70%">'.$Garantia.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Nombre de dominio:</label></td>  
                     <td width="70%">'.$Nombre_Dominio.'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Vencimiento:</label></td>  
                     <td width="70%">'.$Vencimiento.'</td>  
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