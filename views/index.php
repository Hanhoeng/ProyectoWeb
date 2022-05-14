<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once "../inclusiones/meta_tags.php"; ?>
	<?php include_once "../inclusiones/css.php"; ?>
	<link rel="stylesheet" href="../css/estilos2.css">	
	
	<!-- Smartsupp Live Chat script -->
	<script type="text/javascript">
		var _smartsupp = _smartsupp || {};
			_smartsupp.key = 'ae2f14e5e9e1b9cbe15f8802f9dde3679c43a64e';
			window.smartsupp||(function(d) {
  			var s,c,o=smartsupp=function(){ 
				o._.push(arguments)};
				o._=[];
				s=d.getElementsByTagName('script')[0];
				c=d.createElement('script');
  				c.type='text/javascript';c.charset='utf-8';c.async=true;
				c.src='https://www.smartsuppchat.com/loader.js?';
				s.parentNode.insertBefore(c,s);
		})(document);
	</script>
	
	
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<?php
            	include_once "../inclusiones/menu_horizontal_superior.php";
            ?>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  position: relative;
  margin: auto;
  width: 1280px;
  height: 150px;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
  .img {width: 10%}
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../css/imagenes/banner.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../css/imagenes/banner2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../css/imagenes/banner3.png" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500);
}
</script>
<br><br><br><br>

	<section id="noticias">
		<a href="web-hosting.php"><img id="web" src="../css/imagenes/web.png"></a>
		<a href="servidor.php"><img id="servidor" src="../css/imagenes/servidor.png"></a>
		<a href="poliza.php"><img id="poliza" src="../css/imagenes/poliza.png"></a>
		<a href="porque.php"><img id="porque" src="../css/imagenes/porque.png"></a>
		<a href="centro.php"><img id="centro" src="../css/imagenes/centro_ayuda.png"></a>
		<a href="dominios.php"><img id="dominios" src="../css/imagenes/dominios.png"></a>
		<a href="mas_servicios.php"><img id="mas" src="../css/imagenes/mas.png"></a>
		<a href="tecnologia.php"><img id="tec" src="../css/imagenes/tec.png"></a>
		<a href="resellers.php"><img id="resellers" src="../css/imagenes/resellers.png"></a>
		<a href="preguntas.php"><img id="preguntas" src="../css/imagenes/preg.png"></a>


	<div id="anterior_starter" src="../css/imagenes/tacha.png">$500</div>
	<div id="costo_starter">$250/año</div>
		<pre id="starter" style="font-size:small">
    	¡Todo lo que necesitas para comenzar!
		Transferencia ilimitada.
		Configuración instantanea.
		Registro de dominio.
		Espacio Web: 10GB. 
		</pre>
	<a href="#"><img id="starter_detalle" src="../css/imagenes/detalles.png"></a>		

	<div id="anterior_basico">$955</div>
	<div id="costo_basico">$455/año</div>
		<pre id="basico" style="font-size:small">
    	¡La mejor solución para grandes proyectos!
		Espacio Web: 100GB. 
		Incluye un dominio gratis.
		Configuración instantanea.
		Transferencia ilimitada.
		Mas de 140 Apps.
		SiteBuilter con plantillas.
		</pre>
	<a href="#"><img id="basico_detalle" src="../css/imagenes/detalles.png"></a>	

	<div id="anterior_no_limite">$1,598</div>
	<div id="costo_no_limite">$799/año</div>
		<pre id="no_limite" style="font-size:small">
    	¡Maximo rendimiento para proyectos
   	interactivos y con contenidos dinamicos!
		Espacio Web: Ilimitado. 
		Incluye un dominio gratis.
		Configuración instantanea.
		Transferencia ilimitada.
		Mas de 140 Apps.
		SiteBuilter con plantillas.
		Base de datos con MySql: Ilimitadas.
		Cuentas de correos:Ilimitadas.
		</pre>
	<a href="#"><img id="no_limite_detalle" src="../css/imagenes/detalles.png"></a>

	<div id="anterior_avanzado">$2,988</div>
	<div id="costo_avanzado">$1,039/año</div>
		<pre id="avanzado" style="font-size:small">
	¡Un plan superior, ideal para desarrolladores!
		Soporte de expertos en apps. 
		Espacio Web: Ilimitado.
		Incluye un dominio gratis.
		2GB de memoria RAM garantizados.
		Transferencia ilimitada.
		Mas de 140 Apps.
		SiteBuilter con plantillas.
		Base de datos con MySql: Ilimitadas.
		Cuentas de correos:Ilimitadas.
		</pre>
	<a href="#"><img id="avanzado_detalle" src="../css/imagenes/detalles.png"></a>

	<pre id="texto" style="font-size:smaller">
  La maxima calidad de hosting al mejor
  precio. Los planes incluyen todo lo
  necesitas: Mayor rendimiento y
  maxima seguridad para tu sitio Web.

  The Best Host te ofrece el mas alto
  nivel de confiabilidad gracias a 
  nuestra georredundancia: lo que
  significa que tu pagina web estara
  almacenada en dos centros de datos
  de alto rendimiento independientes
  localizados en distintos lugares

  Si tienes alguna pregunta puedes
  ponerte en contacto con nosotros a:
	</pre>
	
	<div id="correo_texto">help@thebesthost.com</div> 
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br>
	<a href="Login.php"><button id="admin" type="button" class="btn btn-secondary">Mi cuenta</button></a><br>
	</section>

    <footer>
		<a id="mapa" href="mapa.view.php">
            <img src="../css/imagenes/maps.png" alt="">
		</a>

		<form method="POST" action="../controller/controller_sugerencia_registro.php" accept-charset="utf.g" onsubmit="return valida_forma_sugerencia();">
			<div id=name>
				<input type="text" id="nombre" name="name" class="name" maxlength="30" placeholder="Ingrese su nombre" required="True">
			</div>

			<div id="correo">
				<input type="email" id="email" name="email" class="correo" maxlength="30"
				placeholder="Ingrese su Email" required="True">
			</div>
		
			<div>
				<textarea id="sugerencia" name="sugerencia" class="sugerencia" maxlength="1000" required="True">
						</textarea> 
				</div>
		
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<button id="enviar" type="submit" class="btn btn-light">Enviar Sugerencia</button>	
		</form>
	</footer>

</section>
		
	<form class="contador" >
		<div id="sfc9wc5kytqxxlbxb9q1g3sn7n6pm3ztk2e"></div> 
			<script type="text/javascript" src="https://counter3.stat.ovh/private/counter.js?c=9wc5kytqxxlbxb9q1g3sn7n6pm3ztk2e&down=async" async></script>
		<br><a href="https://www.contadorvisitasgratis.com"></a><noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas para joomla"><img src="https://counter3.stat.ovh/private/contadorvisitasgratis.php?c=9wc5kytqxxlbxb9q1g3sn7n6pm3ztk2e" border="0" title="contador de visitas para joomla" alt="contador de visitas para joomla"></a></noscript>
	</form>
	<script src="js/valida_sugerencia.js"></script>
</body>
</html>
