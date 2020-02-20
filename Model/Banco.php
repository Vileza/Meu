<?php
  require "Conexao.php";

  class Banco{

    private $conexao;

    public function __construct(){

      $this->conexao = Conexao::pegaConexao();
    }

    public function insereDados(string $nome, string $cpf, string $email):void{

      $stmt = $this -> conexao -> prepare("INSERT INTO cadastro (nome, cpf , email) VALUES (?,?,?) ");
      $stmt         -> bindParam(1, $nome);
      $stmt         -> bindParam(2, $cpf);
      $stmt         -> bindParam(3, $email);
      $stmt         -> execute();

    }

    public function listaDados():array{

      $stmt = $this -> conexao -> query("SELECT * FROM cadastro");
      return  $stmt -> fetchAll();
    }

    public function listarUm(string $id){
    //  throw new Exception("Erro");

      $stmt = $this -> conexao -> prepare("SELECT * FROM cadastro WHERE id = ?");
      $stmt         -> bindParam(1, $id);
      $stmt         -> execute();

      return $stmt  ->fetch(PDO::FETCH_ASSOC);
    }

    public function excluiDados(string $id):void{

      $stmt = $this -> conexao -> prepare("DELETE FROM cadastro WHERE id = ?");
      $stmt         -> bindParam(1, $id);
      $stmt         -> execute();

    }

    public function atualizaDados(string $id, string $nome, string $cpf, string $email):void
    {
      $stmt = $this -> conexao -> prepare("UPDATE cadastro SET nome = ?, cpf = ?, email = ? WHERE id = ?");
      $stmt         -> bindParam(1, $nome);
      $stmt         -> bindParam(2, $cpf);
      $stmt         -> bindParam(3, $email);
      $stmt         -> bindParam(4, $id);
      $stmt         -> execute();
    }
}

?>
