<?php
    session_start();
    $_SESSION["user_id"] = 0;
    unset($_SESSION["user_id"]);
    session_destroy();
    header("Location: ../index.php");
?>