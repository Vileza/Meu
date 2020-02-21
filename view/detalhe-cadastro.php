<?php
try{
//  require "../Model/Erro.php";
  require "padrao/cabecalho.php";
  $listar = require "../src/instancia/detalhe-cadastro-cliente.php";
} catch (Exception $e){
  Erro::trataErro($e);
}

?>

  <h1 style="text-align:center;">Detalhe do Cadastro de <?php echo $listar['nome']; ?></h1>

  <table border="1" style="margin:0 auto; width:50%; height: 100px; text-align:center;">

    <tr>

      <th style="width:30%; text-align:center;">ID</th>
      <th style="width:30%; text-align:center;">NOME</th>
      <th style="width:30%; text-align:center;">CPF</th>
      <th style="text-align:center;">EMAIL</th>
      <th style="text-align:center;">Nome Usuário</th>

    </tr>

    <tr>

      <td>
        <?php echo $listar['id']; ?>
      </td>
      <td>
        <?php echo $listar['nome'];?>
      </td>
      <td>
        <?php echo $listar['cpf']; ?>
      </td>
      <td style="margin:0 10px;">
        <?php echo $listar['email'] ?>
      </td>
      <td>
        <?php echo $listar['usuario']; ?>
      </td>

    </tr>

  </table>


<?php require "padrao/rodape.php"; ?>
