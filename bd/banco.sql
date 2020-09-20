  drop database wfcolchoes;

  create database wfcolchoes;

  use wfcolchoes;


create table frete(
  id_frete int auto_increment primary key,
  nome varchar(50),
  valor decimal(8,2)
);


insert into frete values
  ('','Frete interno',1.50),
  ('','Frete Esterno',1.10);



create table cidadefretefree(
  id_cidadefrete int auto_increment primary key,
  nome varchar(50)
);

insert into cidadefretefree values
  ('', 'GUARULHOS'),
  ('', 'ARUJÁ'),
  ('', 'MOGI DAS CRUZES'),
  ('', 'SANTA ISABEL'),
  ('', 'SÃO PAULO');

create table categorias(
  id_categoria int auto_increment primary key,
  nome varchar(80)
);

insert into categorias values
  ('','Casal'),
  ('','Infantil'),
  ('','King'),
  ('','Queen'),
  ('','Solteiro'),
  ('','Viúva'),
  ('','Espumas'),
  ('','Pet'),
  ('','Massageador'),
  ('','Cabeceiras'),
  ('','Travesseiros');


create table produtos(
  id_produto int auto_increment primary key,
  nome varchar(150),
  descricao text,
  valor int(11),
  frete_grande_porte varchar(10),
  estoque int(11),
  pasta varchar(20),
  categoria int,
  produto_destaque boolean,
  prod_ativo boolean,

  foreign key (categoria) references categorias(id_categoria)

);






create table status_pedido(
  id_status_pedido int auto_increment primary key,
  nome varchar(80)
);

insert into status_pedido values
  ("","Pendente"),
  ("","Aguardando pagamento"),
  ("","Em análise"),
  ("","Pago"),
  ("","Disponível"),
  ("","Em disputa"),
  ("","Devolvida"),
  ("","Cancelada");


create table pedidos (
  id_pedido int auto_increment primary key,
  id_produto int,
  frete boolean,
  frete_distanciaKM varchar(10),
  frete_valor decimal(8,2),
  valorFinal decimal(8,2),
  
  nome_titular varchar(100),
  cpf_titular varchar(20),
  numero_cartao varchar(20),
  
  cep_entrega varchar(10),
  endereco_entrega varchar(200),
  numero_entrega int,
  bairro_entrega varchar(200),
  cidade_entrega varchar(100),
  complemento varchar(50),
  uf_entrega varchar(30),

  status_pedido int,
  code_pedido_loc varchar(80),
  email varchar(80),
  telefone varchar(80),
  data varchar(80),

  foreign key (id_produto) references produtos(id_produto),
  foreign key (status_pedido) references status_pedido(id_status_pedido)

);








-- Testes
-- insert into produtos values
--   ('','Nome','descricao',10,'true',17,'p2',1,false),
--   ('','Nome','descricao',20,'true',5,'p2',2,false),
--   ('','Nome','descricao',30,'true',12,'p2',3,false),
--   ('','Nome','descricao',40,'true',1,'p2',4,false),
--   ('','Nome','descricao',50,'true',7,'p2',5,false),
--   ('','Nome','descricao',60,'true',8,'p2',6,false);



select produtos.id_produto, produtos.nome, produtos.descricao, produtos.estoque, produtos.pasta ,
      categorias.id_categoria, categorias.nome
from produtos inner join categorias 
on produtos.categoria = categorias.id_categoria; 



-- Admin
create table admin(
  id_admin int auto_increment primary key,
  usuario varchar(150),
  senha varchar(150)
);

insert into admin values ('','admin','40bd001563085fc35165329ea1ff5c5ecbdbbeef');


-- pagseguro

CREATE TABLE notificacoes(
  id_notificacao int auto_increment,
  notificationType varchar (255),
  notificationCode varchar (255),

  primary key(id_notificacao)
);







CREATE TABLE pag_status (
                id_status INT NOT NULL,
                status_pagseguro varchar(100) NOT NULL,
                descricao_status varchar(255) NOT NULL,
                CONSTRAINT pag_status_pk PRIMARY KEY (id_status)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


insert into pag_status values
(1, 'Aguardando Pagamento', 'O comprador iniciou a transação, mas até o momento o PagSeguro não recebeu nenhuma informação sobre o pagamento'),
(2, 'Em análise', 'O comprador optou por pagar com um cartão de crédito e o PagSeguro está analisando o risco da transação'),
(3, 'Recebido', 'PagSeguro já recebeu uma confirmação da instituição financeira responsável pelo processamento'),
(4, 'Disponível', 'A transação foi paga e chegou ao final de seu prazo de liberação sem ter sido retornada e sem que haja nenhuma disputa aberta'),
(5, 'Em disputa', 'O comprador, dentro do prazo de liberação da transação, abriu uma disputa'),
(6, 'Devolvida', 'O valor da transação foi devolvido para o comprador'),
(7, 'Cancelada', 'A transação foi cancelada sem ter sido finalizada');












