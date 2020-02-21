<?php
  try{
    require "../Model/Erro.php";
  require "../Model/Banco.php";
  $detalhe = new Banco();
  return $detalhe -> listarUm($_GET['id']);
}catch (Exception $e){
  Erro::trataErro($e);
}
?>
