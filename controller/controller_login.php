  <?php
 session_start();
 include("../models/class_db.php");

if (!empty($_POST['name']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, nombre, contraseña FROM usuarios WHERE nombre = :name');
  $records->bindParam(':name', $_POST['name']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: ./../view/index.php");
  } else {
    $message = 'Las credenciales no coinciden';
  }
}

?>