<?php
  include "../Model/Erro.php";
  try{
  require "../Model/Banco.php";
  $lista  = new Banco();
  $listar = $lista->listaDados();
  return $listar;
}catch (Exception $e) {
  Erro::trataErro($e);
}

?>
