<?php
  session_start();
  unset($_SESSION['id']);
  header('location: ../../view/Entrar.php');
?>
