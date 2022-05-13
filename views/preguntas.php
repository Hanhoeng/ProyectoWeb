<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos2.css">	
		
	<title>The Web Hosting</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">

<picture>
<header>
<a href="index.php"><img id="logo" src="./../css/imagenes/logo (1).png"></a>
<a href="compañia.php"><img id="compañia" src="../css/imagenes/compañia.png"></a>
<a href="servicios.php"><img id="servicios" src="../css/imagenes/servicios.png"></a>
<a href="soluciones.php"><img id="soluciones" src="../css/imagenes/soluciones.png"></a>
<a href="clientes.php"><img id="clientes" src="../css/imagenes/clientes.png"> </a>
<a href="contacto.php"><img id="contacto" src="../css/imagenes/contacto.png"></a> 	
</header>
<style>
	* {
    box-sizing: border-box;
}
.acordeon input{
    display: none;
}
.acordeon__titulo{
    display: block;
    padding: 30px;
    background-color:darkred;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    border-bottom: 1px solid #ffff;
	margin-left: 5%;
	margin-right: 5%;
}
.acordeon__titulo:hover{
    background:orangered;
}
.acordeon__contenido{
    height: 0;
    overflow: hidden;
    margin: 0;
	margin-left: 5%;
	margin-right: 5%;
	font-size: 25px;
	background-color:white;
}
.acordeon input:checked ~ .acordeon__contenido{
    height: auto;
    margin: 15px 0;
}

</style>		
<center>
<h1> PREGUNTAS FRECUENTES</h1>
<div class="acordeon">
	<div class="acordeon__item">
		<input type="radio" name="acordeon" id="item1">
		<label for="item1" class="acordeon__titulo">¿Qué es el hospedaje web?</label>
		<p class="acordeon__contenido">El hospedaje o alojamiento web (en inglés: web hosting) es el servicio que provee a los usuarios de Internet un sistema para poder almacenar información, imágenes, vídeo, o cualquier contenido accesible vía web. Es una analogía de "hospedaje o alojamiento en hoteles o habitaciones" donde uno ocupa un lugar específico, en este caso la analogía alojamiento web o alojamiento de páginas web, se refiere al lugar que ocupa una página web, sitio web, sistema, correo electrónico, archivos etc. en Internet o más específicamente en un servidor que por lo general hospeda varias aplicaciones o páginas web.</p>
	</div>
	<div class="acordeon__item">
		<input type="radio" name="acordeon" id="item2">
		<label for="item2" class="acordeon__titulo">¿Cómo funciona un host?</label>
		<p class="acordeon__contenido">Cada vez que abres tu navegador e ingresas una dirección de un sitio web, se establece una conexión con el servidor en el que dicho sitio está hospedado, es de esa forma que puedes acceder a él.Gracias a este proceso, el nombre del sitio web se convierte en una dirección IP y todo el contenido aparece en tu pantalla.
</p>
	</div>
	<div class="acordeon__item">
		<input type="radio" name="acordeon" id="item3">
		<label for="item3" class="acordeon__titulo">¿Cuánto tiempo lleva configurar una cuenta de alojamiento web en The Best Hosting?</label>
		<p class="acordeon__contenido">Nuestra configuración es prácticamente instantánea, y nos sentimos muy orgulloso de ellos. Por lo que podrás comenzar a utilizar nuestro servicio y crear tu página web inmediatamente. Simplemente crea tu cuenta y sigue el proceso de configuración y estarás listo.</p>
	</div>
	<div class="acordeon__item">
		<input type="radio" name="acordeon" id="item4">
		<label for="item4" class="acordeon__titulo"> ¿Qué es el hosting reseller?</label>
		<p class="acordeon__contenido">Un revendedor de alojamiento o hosting reseller es una opción que implica a dos partes. La primera es una empresa (un proveedor de web hosting) para el alquiler del espacio en disco duro, ancho de banda y espacio físico en un data center y  la segunda parte otra empresa o persona la cual contrata este servicio que luego se encarga de arrendar el espacio a terceros.   En pocas palabras, si una persona o pequeña empresa contrata los servicios de hosting reseller es capaz de proporcionar alojamiento a tus propios clientes como si este fuese una gran empresa web hosting. </p>
	</div>
</div>
</section>
</center>
    </picture>
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