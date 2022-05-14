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
<CENTER>
			<br>
			<h1>Planes de Reseller</h1>
<h5>Nuestros planes de reseller te permiten empezar tu propia empresa de hosting con muy poca inversión y con el respaldo de The best web Hosting</h5>

<font size="5px">
<table> <tr> <td>
<br>
<font size="6px"> Plan1 </font>
<li>$290
<li>+IVA/mes
<li>20GB Espacio en disco
<li>200GB Transferencia Mensual
<li>Cuentas Revendidas 20
<li>Autoinstalador Softaculous
<li>cPanel/WHM Control Panel
<li>Tecnología CloudLinux/Varnish
<li>Overselling Habilitado
<br> </td>

<td>
<font size="6px"> Plan2 </font>
<li>$450
<li>+IVA/mes
<li>40GB Espacio en disco
<li>800GB Transferencia Mensual
<li>Cuentas Revendidas Ilimitadas
<li>Autoinstalador Softaculous
<li>cPanel/WHM Control Panel
<li>Tecnología CloudLinux/Varnish
<li>Overselling No Habilitado </td>
	<td>

<font size="6px"> Plan3 </font>
<li>$540
<li>+IVA/mes
<li>50GB Espacio en disco
<li>1000GB Transferencia Mensual
<li>Cuentas Revendidas Ilimitadas
<li>Autoinstalador Softaculous
<li>cPanel/WHM Control Panel
<li>Tecnología CloudLinux/Varnish
<li>Overselling No Habilitado
<li>Licencia WHMCS Starter Incluida
</td>
</tr>
	<br><br><tr>

<td>
<font size="6px"> Plan4 </font>
<li>$600
<li>+IVA/mes
<li>100GB Espacio en disco
<li>2000GB Transferencia Mensual
<li>Cuentas Revendidas Ilimitadas
<li>Autoinstalador Softaculous
<li>cPanel/WHM Control Panel
<li>Tecnología CloudLinux/Varnish
<li>Overselling No Habilitado
<li>Licencia WHMCS Starter Incluida</td>
<td>
<font size="6px"> Plan5 </font>
<li>$760
<li>+IVA/mes
<li>200GB Espacio en disco
<li>4000GB Transferencia Mensual
<li>Cuentas Revendidas Ilimitadas
<li>Autoinstalador Softaculous
<li>cPanel/WHM Control Panel
<li>Tecnología CloudLinux/Varnish
<li>Overselling No Habilitado
<li>Licencia WHMCS Starter Incluida
</td></tr>
</table>

<br><br>
<center>
<div class="col-md-4">

</section>

    </picture>

<br><br><br><br><br><br><br><br><br>
  
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