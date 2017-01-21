create database wda;
use wda;

CREATE TABLE titulo(
id int(11) PRIMARY KEY NOT NULL,
nome varchar(255) NOT NULL,
editora varchar(255) NOT NULL,
categoria varchar(50) NOT NULL,
genero varchar(50) NOT NULL,
status varchar(50) NOT NULL,
periodo date not null);

ALTER TABLE titulo
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE customers (
  id int(11) NOT NULL,
  nome varchar(255) NOT NULL,
  cpf_cnpj varchar(14) NOT NULL,
  birthdate date NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code int(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  phone int(13) NOT NULL,
  mobile int(13) NOT NULL,
  ie int(11) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

ALTER TABLE customers
  ADD PRIMARY KEY (id);
  
ALTER TABLE customers
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `wda`.`customers` 
CHANGE COLUMN `mobile` `mobile` VARCHAR(13) NOT NULL ;

INSERT INTO `customers` (`id`, `nome`, `cpf_cnpj`, `birthdate`, `address`, 
`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 
VALUES ('0', 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '1234568', 'Teste', 'Teste', '5555555', '55555555', '123456', 
'2016-05-24 00:00:00', '2016-05-24 00:00:00');

INSERT INTO `customers` (`id`, `nome`, `cpf_cnpj`, `birthdate`, `address`, 
`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 
VALUES ('0', 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '1234568', 'Teste', 'Teste', '5555555', '55555555', '123456', 
'2016-05-24 00:00:00', '2016-05-24 00:00:00');

INSERT INTO `titulos` (`id`, `nome`, `editora`, `categoria`, `genero`, `status`,`periodo`)
VALUES ('0', 'Superman', 'Panini', 'mensal', 'Aventura', 'Em Circulacao', '1995-10-20');

select * from `titulos`;
select * from `customers`;
desc `customers`;

show tables;