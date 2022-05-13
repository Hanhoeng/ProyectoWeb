<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
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

    <h1>Registrarse</h1>
    <span>o <a href="Login.php">Acceder</a></span>

    <form action="../controller/controller_singup.php" method="POST">
      <input name="name" type="text" placeholder="Enter your name" required="True">
      <input name="password" type="password" placeholder="Enter your Password" required="True">
      <input name="confirm_password" type="password" placeholder="Confirm Password" required="True">
      <input type="submit" value="Registrarse">
    </form>

  </body>
</html>