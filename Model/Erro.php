<?php
  class Erro{
    public static function trataErro(Exception $e){
      echo "<pre>";
      print_r($e);
      echo "</pre>";
      echo $e->getMessage('Erro');
      exit;
    }
  }
?>
