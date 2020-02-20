<?php
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
                <label for="">Nome</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome completo" value="<?php echo $result['nome'];  ?>" >
                <label for="">CPF</label>
                <input required name="cpf" type="text" class="form-control" placeholder="Seu CPF" value="<?php echo $result['cpf'];  ?>" >
                <label for="">E-mail</label>
                <input name="email" type="text" class="form-control" placeholder="Seu Email" value="<?php echo $result['email'];?>" >
                <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require "padrao/rodape.php"; ?>
