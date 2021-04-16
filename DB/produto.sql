CREATE TABLE produto (
  id int(11) PRIMARY  KEY NOT NULL AUTO_INCREMENT,
  descricao varchar(50) NOT NULL,
  referencia varchar(50) NOT NULL,
  idcategoria int(11) NOT NULL,
  data_cadastro date NOT NULL,
  preco_custo decimal(10,2) NOT NULL,
  lucro decimal(10,2) NOT NULL,
  preco_venda decimal(10,2) NOT NULL,
  observacao varchar(100) NOT NULL,
  status char(1) NOT NULL,
  foto varchar(100) NOT NULL,
  data_vencimento date NOT NULL,
  CONSTRAINT FK_ID_CATEGORIA FOREIGN KEY (idcategoria) REFERENCES categoria (id)
) 