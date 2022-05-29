<?php
	session_start();
	if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != 0){
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
  <a href="../views/index.php"><img src="./../css/imagenes/logo (1).png" width="300" height="150"></a>
    </header>


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Agregar nuevo usuario</h1>

    <form action="../controller/controller_singup.php" method="POST">
      <input name="name" type="text" placeholder="Enter name" required="True">
      <input name="password" type="password" placeholder="Enter Password" required="True">
      <input name="confirm_password" type="password" placeholder="Confirm Password" required="True">
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