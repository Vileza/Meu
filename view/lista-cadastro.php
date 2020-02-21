<?php
  require "padrao/cabecalho.php";
  try{
   $listando = require "..\src\instancia\lista-cliente-cadastro.php";
 } catch (Exception $e) {
   Erro::trataErro($e);
 }
?>
<div class="row">
    <div class="col-md-12">
        <h2>Categorias</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="formulario-cadastro.php" class="btn btn-info btn-block">Novo Cadastro</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
      <?php if(COUNT($listando) > 0 ): ?>
        <table class="table" style="margin-top:10px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listando as $linha): ?>
                    <tr>
                        <td><a href="#" class="btn btn-link"><?php echo $linha['id']; ?></a></td>
                        <td><a href="#" class="btn btn-link"><?php echo $linha['nome']; ?></a></td>
                        <td><a href="editar-cliente.php?id=<?php echo $linha['id']; ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="../src/instancia/excluir-cadastro.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?php else: ?>
        <p>Nenhum item encontado.</p>
      <?php endif; ?>
    </div>
</div>
<?php require "padrao/rodape.php"; ?>
