<?php require "padrao/cabecalho.php"; ?>

<h1 style="text-align:center;">FORMULÁRIO DE CADASTRO</h1>
<form action="../src/instancia/cadastro-inserir-banco.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="">Nome</label>
                  <input name="nome" type="text" class="form-control" placeholder="Nome completo">
                <label for="">CPF</label>
                  <input name="cpf" type="text" class="form-control" placeholder="Seu CPF">
                <label for="">E-mail</label>
                  <input name="email" type="text" class="form-control" placeholder="Seu Email">
                <label for="cpf">Nome login:</label>
                  <input type="text" name="usuario" id="cpf" class="form-control" placeholder="Seu nome de usuário">
                <label for="senha">Senha:</label>
                  <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha">
                <label for="confirmaSenha">Confirme a senha:</label>
                  <input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control" placeholder="Confirme a senha">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require "padrao/rodape.php"; ?>
