<?php
if (!empty($_POST)){
	require_once '../views/php/funciones_php.php';
    include("../models/class_oferta_dal.php");
	$metodos_oferta=new oferta_dal;

	if (isset($_POST['oferta_id'])){
		$oferta_id=strtoupper($_POST['oferta_id']);
	}else{
		$oferta_id=null;
		echo "no llego datos del Id de la oferta";
		exit;
	}

	if (isset($_POST['f_nombre'])){
		$nomb=strtoupper($_POST['f_nombre']);
	}else{
		$nomb=null;
		echo "no llego dato de nombre";
		exit;
	}

	if (isset($_POST['f_precio'])){
		$prec=strtoupper($_POST['f_precio']);
	}else{
		$prec=null;
		echo "no llego dato de precio";
		exit;
	}
	if (isset($_POST['f_espacio'])){
		$espa=strtoupper($_POST['f_espacio']);
	}else{
		$espa=null;
		echo "no llego dato de espacio";
		exit;
	}
	if (isset($_POST['f_cuentas'])){
		$cuent=strtoupper($_POST['f_cuentas']);
	}else{
		$cuent=null;
		echo "no llego dato de cuenta";
		exit;
	}
	if (isset($_POST['f_garantia'])){
		$garan=strtoupper($_POST['f_garantia']);
	}else{
		$garan=null;
		echo "no llego dato de garantia";
		exit;
	}
	if (isset($_POST['f_nombre_dominio'])){
		$dom=strtoupper($_POST['f_nombre_dominio']);
	}else{
		$dom=null;
		echo "no llego dato de nombre de dominio";
		exit;
	}
	if (isset($_POST['f_vencimiento'])){
		$ven=strtoupper($_POST['f_vencimiento']);
	}else{
		$ven=null;
		echo "no llego dato de vencimiento";
		exit;
	}

	
	$errores=array();
	if ($_SERVER['REQUEST_METHOD']=='POST'){

		if(!validaRequerido($nomb)){
            $errores[]="El campo Nombre llegó vacío";
        }
        if(!validaRequerido($prec)){
            $errores[]="El campo Precio llegó vacío";
        }
        if(!validaRequerido($espa)){
            $errores[]="El campo Espacio llegó vacío";
        }
        if(!validaRequerido($cuent)){
            $errores[]="El campo Cuenta llegó vacío";
        }
        if(!validaRequerido($garan)){
            $errores[]="El campo Garantia llegó vacío";
        }
        if(!validaRequerido($dom)){
            $errores[]="El campo Nombre de Dominio llegó vacío";
        }
        if(!validaRequerido($ven)){
            $errores[]="El campo Vencimiento llegó vacío";
        }

		if (!$errores){
			$obj_oferta=new oferta($oferta_id,$nomb,$prec,$espa,$cuent,$garan,$dom,$ven);
			if ($oferta_id==''){

				if($metodos_oferta->insertar_oferta($obj_oferta)=="1"){
					echo 'ok';
				}
				else{
					print "Ocurrio un error para ingresar la oferta, intente nuevamente";
				}

			}else{
				if($metodos_usuario->actualiza_usuario($obj_oferta)=="1"){
					echo 'ok';
				}
				else{
					print "Ocurrio un error para actualizar la oferta, intente nuevamente";
				}
			}


		}else{
			echo '<ul style="color: #f00;font-size:25px;">';
      		foreach ($errores as $error):
         	echo '<li>'.$error.'</li>';
      		endforeach;
   			echo '</ul>';
		}



	}
	else{
		print "no ocurrio el request method";
	}


}
else{
	echo 'Error de post, los datos no llegaron correctamente ';
}

?>