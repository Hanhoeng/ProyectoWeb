<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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

    <h1>Acceder</h1>
    <span>o <a href="singup.php">Registrarse</a></span>
    <form action="../controller/controller_login.php" method="POST">
      <input name="name" type="text" placeholder="Enter your name" required="True">
      <input name="password" type="password" placeholder="Enter your Password" required="True">
      <input type="submit" value="Acceder">
    </form>
  </body>
</html>