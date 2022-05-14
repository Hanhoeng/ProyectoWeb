<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once "../inclusiones/meta_tags.php"; ?>
	<?php include_once "../inclusiones/css.php"; ?>
	<link rel="stylesheet" href="../css/estilos2.css">	
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">

<picture>
<?php
            	include_once "../inclusiones/menu_horizontal_superior.php";
            ?>
		
<div style=margin-left:4%;>
		<center>
			<h1> Motivos para elegir The Best Hosting</h1></center>
			<br>
			<p>
			Nunca una empresa es igual a otra, aunque todos le asegurarán que son los mejores en su rubro. Nosotros le decimos, compruébelo Usted mismo contratando nuestros servicios y notará la diferencia.
			</p>
<h3>Nuestra trayectoria</h3>
<p>Estamos en el mercado desde el año 1999 y vamos a seguir operando por muchos años más, ya que permanentemente exploramos nuevas tecnologías y siempre buscamos mejorar nuestros servidores y sistemas para lograr cada día un mejor servicio.</p>

<h3>Atención personalizada</h3>
<p>Brindamos una esmerada atención personalizada porque sabemos lo importante que es el apoyo y ayuda cuando el cliente, nuestro activo más importante, lo necesita. Nos esmeramos por dar siempre una pronta respuesta y una efectiva solución a los inconvenientes que pudieran presentarse</p>

<h3>Innovaciones en el Soporte Técnico</h3>
<p>Ponemos a su servicio nuestra mejor predisposición y los medios técnicos para solucionar sus problemas o consultas. Continuamente incorporamos nuevas soluciones para mejorar nuestra respuesta: Monitoreo permanente de los Servidores, Mesa de Ayuda 24x7, Soporte Remoto, Chat, Base de Conocimiento con soluciones rápidas a problemas frecuentes, etc.</p>

<h3>Hardware de última generación</h3>
<p>Mientras otros comercializan planes de hosting basados en servidores Outlet o de bajo costo, nosotros mejoramos continuamente nuestra infraestructura, ofreciendo hardware de primer nivel, automatización, redundancia y calidad tal como se puede obtener en Estados Unidos o Europa</p>

<h3>Datacenters con la última tecnología</h3>
<p>Nuestros servidores están ubicados en Datacenters con la última tecnología: Argentina (IFX y Gigared), USA (GlobeBuilding) y Europa (Datadock), garantizando la seguridad y disponibilidad de su sitio web desde cualquier parte del mundo.</p>

<h3>Garantía de satisfacción</h3>
<p>Al contratar nuestros servicios de Hosting usted dispone de 30 días durante los cuales, si no está conforme con la calidad de nuestro servicio, puede solicitar el reembolso del dinero abonado.</p>
</div>
</section>

    </picture>

<br><br><br><br>
    
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