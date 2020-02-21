

CREATE TABLE IF NOT EXISTS cliente.cadastro_cliente(
  id integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(255) NOT NULL,
  cpf varchar(50) NOT NULL,
  email varchar(255) NOT NULL UNIQUE,
  usuario varchar(255) NOT NULL UNIQUE,
  senha varchar(255) NOT NULL,
  confirmaSenha varchar(255) NOT NULL
);
