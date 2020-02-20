<?php require "padrao/cabecalho.php"; ?>

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
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require "padrao/rodape.php"; ?>
