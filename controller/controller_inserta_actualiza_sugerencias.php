<?php
if (!empty($_POST)){
	require_once '../views/php/funciones_php.php';
    include("../models/sugerencias_dal.php");
	$metodos_usuario=new sugerencias_dal;

	if (isset($_POST['id'])){
		$usuario_id=strtoupper($_POST['id']);
	}else{
		$usuario_id=null;
		echo "no llego datos del Id del usuario";
		exit;
	}

	if (isset($_POST['f_nombre'])){
		$nomb=strtoupper($_POST['f_nombre']);
	}else{
		$nomb=null;
		echo "no llego dato de nombre";
		exit;
	}

	if (isset($_POST['f_correo'])){
		$contra=strtoupper($_POST['f_correo']);
	}else{
		$contra=null;
		echo "no llego dato de correo";
		exit;
	}
    if (isset($_POST['f_sugerencia'])){
		$contra=strtoupper($_POST['f_sugerencia']);
	}else{
		$contra=null;
		echo "no llego dato de sugerencia";
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
			$obj_usuario=new sugerencias($id,$nombre,$correo,$sugerencia);
			if ($usuario_id==''){

				if($metodos_usuario->insertar_sugerencia($obj_usuario)=="1"){
					echo 'ok';
				}
				else{
					print "Ocurrio un error para ingresar el usuario, intente nuevamente";
				}

			}else{
				if($metodos_usuario->actualiza_sugerencia($obj_usuario)=="1"){
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