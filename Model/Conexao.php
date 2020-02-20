<?php

  class Conexao{

    public static function pegaConexao(){
      $conexao = new PDO('mysql:host=127.0.0.1; dbname=cliente', 'root', '');
    //  $conexao -> PDO::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conexao;

    }
  }
