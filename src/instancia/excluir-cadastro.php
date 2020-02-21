<?php
  try{
    require "autoload.php";
    $excluir = new Banco();
    $excluir ->excluiDados($_GET['id']);
    header('location: ../../view/lista-cadastro.php');
  } catch (Exception $e) {
    Erro::trataErro($e);
  }

?>
