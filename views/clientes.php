<!DOCTYPE html>
<html>

<head>
	<?php include_once "../inclusiones/meta_tags.php"; ?>
	<?php include_once "../inclusiones/css.php"; ?>
	<link rel="stylesheet" href="../css/estilos2.css">

	<style>
		#contenedor {
			display: flex;
			flex-wrap: wrap;
		}

		#contenedor>div {

			border-radius: 20px;
			border: 4px solid gray;
			margin: 40px;
			padding: 6px;
			width: 450px;
			height: 220px;
		}
	</style>
</head>
<link rel="stylesheet" type="text/css" href="../css/cliente2.css" />

<?php
            	include_once "../inclusiones/menu_horizontal_superior.php";
            ?>


<div id=contenedor>

	<div>
		<center><a href="https://www.oxxo.com/"><img src="../css/imagenes/oxxo.jpg" width="400" height="200" /></a></center>
	</div>
	<div>
		<center><a href=https://www.ford.mx /><img src="../css/imagenes/Ford.png" width="400" height="190" /></a></center>
	</div>

	<div>
		<center><a href="http://www.uadec.mx/"><img src="../css/imagenes/UAdeC.jpg" width="300" height="200" /></a></center>
	</div><br><br><br><br><br><br>
	<div>
		<center><a href="http://www.ferreterachamizal.com/inicio.php"><img src="../css/imagenes/Ferretera.jpg" width="350" height="180" /></a></center>
	</div>

	<div>
		<center><a href="https://alsuper.com/"><img src="../css/imagenes/Alsuper.png" width="350" height="200" /></a></center>
	</div><br><br><br><br><br><br>
	<div>
		<center><a href="https://www.suburbia.com.mx/tienda/inicio"><img src="../css/imagenes/suburbia.jpg" width="400" height="200" /></a></center>
	</div>

</div>


<center>
	<br>
</center>

<br><br>
<footer>
	<a id="mapa" href="mapa.view.php"><img src="../css/imagenes/maps.png" alt=""></a>

	<form method="post" action="../controller/controller_sugerencia_registro.php">
		<div id=name><input name="nombre" class="name" type="text" size="15" maxlength="30" name="nombre" placeholder="Ingrese su nombre"> </div>
		<div id="correo"><input name="correo" class="correo" type="email" size="15" maxlength="30" name="correo" placeholder="Ingrese su Email"></div>
		<div><input name="sugerencia" class="sugerencia" type="text" size="15" maxlength="100" name="sugerencia"></div>
	</form>

</footer>
</body>

</html>