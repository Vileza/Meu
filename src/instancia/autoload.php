<?php
  spl_autoload_register(function ($caminhoClasse){
      if(file_exists('../../Model/' . $caminhoClasse . '.php')){
        require_once '../../Model/' . $caminhoClasse . '.php';
      }
    });



?>
