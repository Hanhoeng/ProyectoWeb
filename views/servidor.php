<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once "../inclusiones/meta_tags.php"; ?>
	<?php include_once "../inclusiones/css.php"; ?>
	<link rel="stylesheet" href="../css/estilos2.css">	
		
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">

<picture>
<?php
            	include_once "../inclusiones/menu_horizontal_superior.php";
            ?>
		<center>
<br>
<h1>Servidores Dedicados </h1>
		<body>
			<br>
			<p><font size="6px" style=margin-left:4%;>Conoce la lista de nuestros precios para servidores dedicados, te garantizamos los mejores precios que podras encontrar en el mercado.</p>
			 <img src="../css/imagenes/servidores.png.png" width="1000px">
</a></center>
</section>

    </picture>
<br><br><br>
<footer>
		<a id="mapa" href="mapa.view.php">
            <img src="../css/imagenes/maps.png" alt="">
		</a>

<form method="POST" action="../controller/controller_sugerencia_registro.php" accept-charset="utf.g">
	<font size="4px">
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
		<button id="enviar" type="submit" class="btn btn-light">Enviar</button>	
	
	</form>

	</footer>

</body>
</html>