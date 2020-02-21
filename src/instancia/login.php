<?php
  session_start();
  require "../../Model/Banco.php";
    $entrar = new Banco();
    $teste=$entrar -> entrar($_POST['user'],
                             $_POST['senha']);

  if(!empty($teste)){
    $_SESSION['id'] = $teste['id'];
    if(!empty($_SESSION['id'])){
      header('location: ../../view/lista-cadastro.php');
    }
  }else{
    header('location: ../../view/Entrar.php');

}


?>
