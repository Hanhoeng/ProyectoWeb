<?php
if (!empty($_POST)){
	require_once '../views/php/funciones_php.php';
    include("../models/class_planes_dal.php");
	$metodos_usuario=new planes_dal;

	if (isset($_POST['plan_id'])){
		$usuario_id=strtoupper($_POST['plan_id']);
	}else{
		$usuario_id=null;
		echo "no llego datos del Id de los planes";
		exit;
	}

	if (isset($_POST['usuario_id'])){
		$nomb=strtoupper($_POST['usuario_id']);
	}else{
		$nomb=null;
		echo "no llego dato de usuario";
		exit;
	}

	if (isset($_POST['oferta_id'])){
		$contra=strtoupper($_POST['oferta_id']);
	}else{
		$contra=null;
		echo "no llego dato de la oferta";
		exit;
	}
    if (isset($_POST['fecha_registro'])){
		$contra=strtoupper($_POST['fecha_registro']);
	}else{
		$contra=null;
		echo "no llego dato de fecha de registro";
		exit;
	}

	
	$errores=array();
	if ($_SERVER['REQUEST_METHOD']=='POST'){

		if(!validaRequerido($nomb)){
            $errores[]="El campo Nombre llegó vacío";
        }
        if(!validaRequerido($contra)){
            $errores[]="El campo Contraseña llegó vacío";
        }

		if (!$errores){
			$obj_plan=new plan($ID, $ID_USUARIO, $ID_OFERTA, $FECHA_REGISTRO);
			if ($ID==''){

				if($metodos_usuario->insertar_planes($obj_plan)=="1"){
					echo 'ok';
				}
				else{
					print "Ocurrio un error para ingresar el usuario, intente nuevamente";
				}

			}else{
				if($metodos_usuario->actualiza_plan($ID, $obj_plan)=="1"){
					echo 'ok';
				}
				else{
					print "Ocurrio un error para actualizar el usuario, intente nuevamente";
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