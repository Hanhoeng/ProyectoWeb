<?php
	session_start();
	if(isset($_SESSION['user_id']) || $_SESSION['user_id'] == 0){
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <script>
      function onSubmit(token) {
        document.getElementById("Login").submit();
      }
    </script>
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
    <form id="Login" method="POST" action="../controller/controller_login.php" onsubmit="return valida_login()" ;>
      
    <!-- Usuario -->
      <div class="form-group">
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required="True">
      </div>
      <!-- Password -->
      <div class="form-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required="True">
      </div>
      <!-- Captcha -->
      <style>
        .text-center {
          text-align: center;
        }

        .g-recaptcha {
          display: inline-block;
        }
      </style>

      
<form method="post" onsubmit="return submitUserForm();">
    <div class="g-recaptcha" data-sitekey="6LdJbTQgAAAAAHWdWny1Irk009npUdDg5DzBTsCp" data-callback="verifyCaptcha"></div>
    <div id="g-recaptcha-error"></div>
    <input type="submit" name="submit" value="Submit" />
</form>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
var recaptcha_response = '';
function submitUserForm() {
    if(recaptcha_response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha(token) {
    recaptcha_response = token;
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>

    </form>
    <?php
      include_once "../inclusiones/js_incluidos.php";
    ?>
  </body>
</html>
<?php
}
else{
  header("Location: /ProyectoWeb/views/menu_crud.php");
}
?>