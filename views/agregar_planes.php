<?php
	session_start();
	if(isset($_SESSION['user_id']) || $_SESSION['user_id'] != 0){
?>
<!DOCTYPE html>
<html>
  <head>
  <?php include_once "../inclusiones/meta_tags.php"; ?>
	<?php include_once "../inclusiones/css.php"; ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body background="../css/imagenes/fondo.png">
  <header>
  <a href="index.php"><img src="./../css/imagenes/logo (1).png" width="300" height="150"></a>
    </header>


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Agregar nueva oferta</h1>

    <form action="../controller/controller_inserta_actualiza_ofertas.php" method="POST">
      <input name="f_nombre" type="text" placeholder="nombre" required="True">
      <input name="f_precio" type="text" placeholder="precio" required="True">
      <input name="f_espacio" type="text" placeholder="espacio" required="True">
      <input name="f_cuentas" type="text" placeholder="cuentas" required="True">
      <input name="f_garantia" type="text" placeholder="garantia" required="True">
      <input name="f_nombre_dominio" type="text" placeholder="nombre de dominio" required="True">
      <input name="f_vencimiento" type="date" placeholder="vencimiento" required="True">
      <input type="submit" value="Agregar">
    </form>

  </body>
</html>
<?php
  }else{
		echo "<h1>GO AWAY HACKER</p>";
    exit;
	}
?>