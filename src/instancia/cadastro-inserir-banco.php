<?php
require "autoload.php";
  //require "../../Model/Erro.php";
  try{

    $insere = new Banco();
    $insere->insereDados($_POST['nome'],$_POST['cpf'],$_POST['email']);

    header('location: ../../view/formulario-cadastro.php');
  }catch (Exception $e) {
    Erro::trataErro($e);
  }
?>
