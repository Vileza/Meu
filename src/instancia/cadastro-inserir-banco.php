<?php
//require "autoload.php";
  require "../../Model/Erro.php";
  try{
    require "../../Model/Banco.php";
    $insere = new Banco();
    $insere->insereDados($_POST['nome'],
                         $_POST['cpf'],
                         $_POST['email'],
                         $_POST['usuario'],
                         $_POST['senha'],
                         $_POST['confirmaSenha']
    );
    //header('location: ../../view/formulario-cadastro.php');
  }catch (Exception $e) {
    Erro::trataErro($e);
  }
?>
