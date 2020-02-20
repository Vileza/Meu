<?php
  require "../../Model/Erro.php";
  try{

    require "autoload.php";
    $editar = new Banco();
    $editar->atualizaDados($_POST['id'],$_POST['nome'],$_POST['cpf'],$_POST['email']);
    header('location: ../../view/lista-cadastro.php');
  } catch (Exception $e) {
    Erro::trataErro($e);
  }
?>
