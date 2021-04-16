CREATE TABLE cliente (
  id int(11) PRIMARY  KEY NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  endereco varchar(100) NOT NULL,
  bairro varchar(50) NOT NULL,
  cidade varchar(50) NOT NULL,
  telefone varchar(50) NOT NULL,
  cep varchar(50) NOT NULL,
  logradouro varchar(100) NOT NULL,
  foto varchar(255)
) 