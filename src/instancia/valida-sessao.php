<?php
  session_start();
  if(empty($_SESSION['id'])){
    header('location: ../view/Entrar.php');
    exit;
  }
?>
