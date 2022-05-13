<?php
    include("../models/class_db.php");
    require_once '../views/singup.php';
    $message = '';

    if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES (:name, :password)";
    $stmt =$conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':password', $_POST['password']);

    if ($stmt->execute()) {
      $message = 'Se creo el usuario correctamente';
    } else {
      $message = 'Hubo un error al crear al usuario';
    }
  }

?>
