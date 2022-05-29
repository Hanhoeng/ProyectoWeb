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

    <h1>Menu administrador</h1>
    <br>
    <div class='container-fluid'>
        <div class="row">
            <div class="col col-md-5"></div>
            <div class="col col-md-2">
                <a href="crud_ofertas.php"><button type="button" class="btn btn-danger btn-block">CRUD ofertas</button></a>
            </div>
            <div class="col col-md-5"></div>
        </div>
        <br>
        <div class="row">
            <div class="col col-md-5"></div>
            <div class="col col-md-2">
                <a href="crud_planes.php"><button type="button" class="btn btn-danger btn-block">CRUD planes</button></a>
            </div>
            <div class="col col-md-5"></div>
        </div>
        <br>
        <div class="row">
            <div class="col col-md-5"></div>
            <div class="col col-md-2">
                <a href="crud_sugerencias.php"><button type="button" class="btn btn-danger btn-block">CRUD sugerencias</button></a>
            </div>
            <div class="col col-md-5"></div>
        </div>
        <br>
        <div class="row">
            <div class="col col-md-5"></div>
            <div class="col col-md-2">
                <a href="crud_usuarios.php"><button type="button" class="btn btn-danger btn-block">CRUD usuarios</button></a>
            </div>
            <div class="col col-md-5"></div>
        </div>
        <br>
        <div class="row">
            <div class="col col-md-5"></div>
            <div class="col col-md-2">
                <a href="../controller/controller_logout.php"><button type="button" class="btn btn-danger btn-block">Logout</button></a>
            </div>
            <div class="col col-md-5"></div>
        </div>
    </div>

  </body>
</html>
<?php
    }
	else{
		echo "<h1>GO AWAY HACKER</p>";
        exit;
	}
?>