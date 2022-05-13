<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/estilos2.css">	
	<title>The Web Hosting</title>

</head>
<body background="./../css/imagenes/fondo.png">
<section id="contenedor">
		<!-- Botones de el header-->
		<header>
		<a href="index.php"><img id="logo" src="./../css/imagenes/logo (1).png"></a>
			<a href="compañia.php"><img id="compañia" src="./../css/imagenes/compañia.png"></a>
			<a href="servicios.php"><img id="servicios" src="../css/imagenes/servicios.png"></a>
			<a href="soluciones.php"><img id="soluciones" src="../css/imagenes/soluciones.png"></a>
			<a href="clientes.php"><img id="clientes" src="../css/imagenes/clientes.png"></a>
			<a href="contacto.php"><img id="contacto" src="../css/imagenes/contacto.png"></a> 	
		</header>
<center>
	<h1>UBICACIÓN</h1>

		<form class="formulario" >
		<iframe id="google_maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3470.280079369911!2d-98.4850466!3d29.566453100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c61d57ece4ea1%3A0x8ba02b6501eb84d6!2s202+Bitters+Rd%2C+San+Antonio%2C+TX+23844%2C+EE.+UU.!5e0!3m2!1ses-419!2smx!4v1559880367080!5m2!1ses-419!2smx" width="1000" height="750" frameborder="5" style="border:10" allowfullscreen></iframe>		
		</form>
	</body>
	</center>
	<footer>
		<a id="mapa" href="mapa.view.php">
            <img src="../css/imagenes/maps.png" alt="">
		</a>

		<form method="POST" action="./../controllers/controller_guardar_sugerencia.php" accept-charset="utf.g">
			<div id=name>
				<input type="text" id="nombre" name="nombre" class="name" maxlength="30" placeholder="Ingrese su nombre"required>
			</div>

			<div id="correo">
				<input type="email" id="email" name="email" class="correo" maxlength="30"
				placeholder="Ingrese su Email" required>
			</div>
		
			<div>
				<textarea id="sugerencia" name="sugerencia" class="sugerencia" maxlength="1000" required>
						</textarea> 
				</div>
		
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<button id="enviar" type="submit" class="btn btn-light">Enviar Sugerencia</button>	
		</form>
	</footer>

</html>
