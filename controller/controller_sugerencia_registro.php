<?php
  include("../models/class_db.php");
  $message = '';

  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['sugerencia'])) {
  $sql = "INSERT INTO sugerencias (nombre, correo, sugerencia) VALUES (:name, :email, :sugerencia)";
  $stmt =$conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':sugerencia', $_POST['sugerencia']);

  if ($stmt->execute()) {
    echo'<script type="text/javascript">
    alert("Gracias por tus comentarios");
    window.location.href="../views/index.php";
    </script>';
  } else {
    echo  'Hubo un error al crear la sugerencia';
  }
}
 

?>