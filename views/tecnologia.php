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
			
			<br><center><h1> Tecnologías </h1></center>
			<a href="https://www.netacad.com/es"><image id="netacad" href=""src="../css/imagenes/cisco (2).png"></image></a>		
			<a href="https://www.php.net/"><image id="php" src="../css/imagenes/php.png" style=width:25%></image></a>
			<a href="https://www.java.com/es/"><image id="java" src="../css/imagenes/java2.png" style=width:25%></image></a>
			<br> <br> <br>
			<a href="https://visualstudio.microsoft.com/es/"><image id="visual" src="../css/imagenes/visual.png" style=width:25%></image></a>	
			<a href="https://www.oracle.com/mx/index.html"><image id="oracle" src="../css/imagenes/oracle2.png" style=width:25%></image></a>
			<br>
			<br>

			</section>
    	</picture>
		<br> <br> <br> 
  
    <footer>
		<a id="mapa" href="mapa.view.php"><img src="../css/imagenes/maps.png" alt=""></a>


		<form method="POST" action="../controller/controller_sugerencia_registro.php" accept-charset="utf.g">
		<font size="4px">
			<div id=name><input type="text" id="nombre" name="nombre" class="name" maxlength="30" placeholder="Ingrese su nombre"required></div>
			<div id="correo"><input type="email" id="email" name="email" class="correo" maxlength="30"placeholder="Ingrese su Email" required></div>
			<div><textarea id="sugerencia" name="sugerencia" class="sugerencia" maxlength="1000" required></textarea></div>

			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<button id="enviar" type="submit" class="btn btn-light">Enviar</button>	

		</form>

	</footer>

</body>
</html>