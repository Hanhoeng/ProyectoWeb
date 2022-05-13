<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos2.css">	
		
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">

<picture>
<header>
<a href="index.php"><img id="logo" src="./../css/imagenes/logo (1).png"></a>
<a href="compañia.php"><img id="compañia" src="../css/imagenes/compañia.png">
<a href="compa.php"><img id="compañia" src="../css/imagenes/compañia.png"></a>
<a href="servicios.php"><img id="servicios" src="../css/imagenes/servicios.png"></a>
<a href="soluciones.php"><img id="soluciones" src="../css/imagenes/soluciones.png"></a>
<a href="clientes.php"><img id="clientes" src="../css/imagenes/clientes.png"> </a>
<a href="contacto.php"><img id="contacto" src="../css/imagenes/contacto.png"></a> 	
</header>
		<CENTER>
<h1> Dominios </h1>
<font size="8px">
<table border="1" style=background-image:url(../css/imagenes/compras.jpg) style=background-size:cover;>
	<tr>

		<th>Extensión </td>
		<th> &nbsp Contrato</td>
		<th>&nbsp Renovación</td>
	</tr>
	<tr>
		<td>.COM </td>
		<td> &nbsp 200 + IVA </td>
		<td> &nbsp 100 + IVA </td>
		
	</tr>
	<tr>
		<td>.NET </td>
		<td> &nbsp 220 + IVA </td>
		<td> &nbsp 200 + IVA </td>		
	</tr>
	<tr>
		<td>.ORG </td>
		<td> &nbsp 220 + IVA </td>
		<td> &nbsp 185 + IVA </td>		
	</tr>
<tr>
		<td>.COM .MX </td>
		<td> &nbsp 300 + IVA </td>
		<td> &nbsp 210 + IVA </td>		
	</tr><tr>
		<td>.MX </td>
		<td> &nbsp 115 + IVA </td>
		<td> &nbsp 100 + IVA </td>		
	</tr><tr>
		<td>.INFO </td>
		<td> &nbsp 100 + IVA </td>
		<td> &nbsp 90 + IVA </td>		
	</tr>


</table>

</section>

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