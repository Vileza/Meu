<?php require "padrao/cabecalho.php"; ?>
<h1 style="text-align:center;">Entrar</h1>
<form action="../src/instancia/login.php" method="POST">
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
            <label for="nome">Nome de Usuário:</label>
              <input type="text" name="user" id="nome" class="form-control" >
            <label for="cpf">Senha: </label>
              <input type="password" name="senha" class="form-control">
            <input type="submit" value="Enviar" class="btn btn-success btn-block" style="margin-top:20px;">
          </div>
        </div>
    </div>

</form>
<?php require "padrao/rodape.php"; ?>
