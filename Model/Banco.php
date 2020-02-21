<?php
  require "Conexao.php";

  class Banco{

    private $conexao;

    public function __construct(){

      $this->conexao = Conexao::pegaConexao();
    }

    public function insereDados(
                                string $nome,
                                string $cpf,
                                string $email,
                                string $usuario,
                                string $senha,
                                string $confirmaSenha):void
    {
      $stmt = $this ->conexao -> prepare("INSERT INTO cadastro_cliente (nome, cpf , email, usuario, senha, confirmaSenha)
                                          VALUES (?, ?, ?, ?, ?, ?)");
      $stmt                   -> bindParam(1, $nome);
      $stmt                   -> bindParam(2, $cpf);
      $stmt                   -> bindParam(3, $email);
      $stmt                   -> bindParam(4, $usuario);
      $stmt                   -> bindParam(5, $senha);
      $stmt                   -> bindParam(6, $confirmaSenha);
      $stmt                   -> execute();
    }

    public function listaDados():array{

      $stmt = $this ->conexao -> query("SELECT * FROM cadastro_cliente");
      return  $stmt           -> fetchAll();
    }

    public function listarUm(string $id){

      $stmt = $this ->conexao -> prepare("SELECT * FROM cadastro_cliente WHERE id = ?");
      $stmt                   -> bindParam(1, $id);
      $stmt                   -> execute();

      return $stmt  ->fetch(PDO::FETCH_ASSOC);
    }

    public function excluiDados(string $id):void{

      $stmt = $this ->conexao -> prepare("DELETE FROM cadastro_cliente WHERE id = ?");
      $stmt                   -> bindParam(1, $id);
      $stmt                   -> execute();

    }

    public function atualizaDados(
                                  string $id,
                                  string $nome,
                                  string $cpf,
                                  string $email,
                                  string $usuario):void{
      $stmt = $this ->conexao -> prepare("UPDATE cadastro_cliente
                                          SET nome = ?, cpf = ?, email = ?, usuario = ?
                                          WHERE id = ?");
      $stmt                   -> bindParam(1, $nome);
      $stmt                   -> bindParam(2, $cpf);
      $stmt                   -> bindParam(3, $email);
      $stmt                   -> bindParam(4, $usuario);
      $stmt                   -> bindParam(5, $id);
      $stmt                   -> execute();
    }


    public function entrar(
                           string $user,
                           string $senha){
      $stmt = $this->conexao->prepare("SELECT id,usuario, senha
                                       FROM cadastro_cliente
                                       WHERE usuario = ? AND senha = ?");
      $stmt                 ->bindParam(1, $user);
      $stmt                 ->bindParam(2, $senha);
      $stmt                 ->execute();

      return $stmt->fetch();
}
}

?>
