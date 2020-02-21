<?php
  require_once "../src/instancia/valida-sessao.php";
  require "padrao/cabecalho.php";
  try{
  require "../Model/Banco.php";
  require "../Model/Erro.php";
    $editar = new Banco();
    $result = $editar->listarUm($_GET['id']);
  }catch(Exception $e){
    Erro::trataErro($e);
  }
?>
<h1 style="text-align:center; padding-bottom:50px;font-size:30px;">EDITAR AS INFORMAÇÕES DO CLIENTE</h1>
<form action="../src/instancia/editar-cadastro.php" method="POST">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome</label>
                  <input name="nome" type="text" class="form-control" placeholder="Nome completo" id="nome" value="<?php echo $result['nome'];  ?>" >

                <label for="cpf">CPF</label>
                  <input required name="cpf" type="text" class="form-control" placeholder="Seu CPF" id="cpf" value="<?php echo $result['cpf'];  ?>" >

                <label for="mail">E-mail</label>
                  <input name="email" type="text" class="form-control" placeholder="Seu Email" id="mail" value="<?php echo $result['email'];?>" >

                <label for="user">Nome login:</label>
                  <input type="text" name="usuario" id="user" class="form-control" placeholder="Seu nome de usuário" value="<?php echo $result['usuario']; ?>">

                <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require "padrao/rodape.php"; ?>
