

CREATE DATABASE pizzaria CHARSET utf8;

use pizzaria;

DROP TABLE sabores;
CREATE TABLE sabores(
	idSabor int not null auto_increment,
    sabor   varchar(50),
    preco	numeric(10,2),
    descr	varchar(512),
    primary key (idSabor)
);

INSERT INTO pizzaria.sabores(sabor,preco, descr) VALUES
	('Muzarella', 30.00, 'Queijo mozzarela em abundância, molho de tomate fresco, azeitona, rodelas de tomate e orégano!'),
	('Calabresa', 30.00, 'Queijo mozzarela, molho de tomate, calabresa em rodelas, cebola, tomate picado, azeite e orégano. A azeitona também pode ser acrescentada!'),
	('Portuguesa', 30.00,'Queijo mozzarela, azeitona verde ou preta, ovo cozido, presunto cozido, cebola, ervilha, molho de tomate e azeite. Também há preparações que são acrescentadas milho verde, pimentão e orégano!'),
	('Marguerita', 30.00, 'Queijo mozzarela, molho de tomate, manjericão, rodelas de tomate fresco, azeitona e orégano salpicado.'),
	('Quatro queijos', 30.00, 'Queijos mozzarela, gorgonzola, parmesão e catupiry'),
	('Frango com catupiry', 30.00, 'Queijo mozzarela, frango, catupiry, sálvia e molho de tomate.');

CREATE TABLE tipoProduto (
	idTipoProduto int not null auto_increment,
	tipoProduto	  varchar(50),
    ativo 		  int default 1,
    primary key (idTipoProduto)
);

INSERT INTO pizzaria.tipoProduto( tipoProduto ) VALUES  ("Pizzas"),("Comidas"),("Bebidas"),("Doces"),("Outros");
DROP  TABLE produto ;
CREATE TABLE produto (
	idProduto 		int not null auto_increment,
	idTipoProduto	int,
    descr			varchar(50),
    preco			numeric(10,2),
    ativo 		    int default 1,
    primary key 	(idProduto),
    foreign key 	(idTipoProduto)  references tipoProduto(idTipoProduto)
);
INSERT INTO produto (idTipoProduto, descr, preco) values 
    ( '1', 'Pizza Grande Inteira', 0.00), 	-- 'Pizzas'
    ( '1', 'Pizza Grande Meio a Meio', 0.00), -- 'Pizzas'
    ( '1', 'Pizza Broto Inteira', 0.00), 		-- 'Pizzas'
    ( '1', 'Pizza Broto Meio a Meio', 0.00), 	-- 'Pizzas'
    ( '2', 'Lazanha 4Q Cong 1Kg', 25.00), -- 'Comidas'
    ( '3', 'Coca 2L', 12.00), -- 'Bebidas'
    ( '3', 'Coca Zero 2L', 12.00), -- 'Bebidas'
    ( '3', 'Suco 1L', 7.00), -- 'Bebidas'
    ( '3', 'Agua 200ml', 4.50), -- 'Bebidas'
    ( '4', 'Sorvete 1lt Sabores', 18.00), -- 'Doces', 
    ( '5', 'Isqueiro', 10.00); --  'Outros'

CREATE TABLE cliente (
	idCliente 		int not null auto_increment primary key,
	nome	 		varchar(30),
    email	 		varchar(50),
    telefone 		varchar(15),
    enderecoCEP		varchar(10), 
    enderecoRua 	varchar(30),
    enderecoNo		varchar(20),
	enderecoCompl	varchar(30),
    enderecoBairro	varchar(30),
    enderecoCidade	varchar(30),
    enderecoUF		varchar(2),
    referencia 		varchar(30)
);

CREATE TABLE pedido (
	idPedido 		int not null auto_increment primary key,
	idCliente		int,
    dtPedido		date,
    dthrEntrega		datetime,
	entregaCEP		varchar(10), 
    entregaRua 		varchar(30),
    entregaNo		varchar(20),
	entregaCompl	varchar(30),
    entregaBairro	varchar(30),
    entregaCidade	varchar(30),
    entregaUF		varchar(2),
    entregaTelefone varchar(2),
    entregaContato	varchar(30),
    tipoPgto		varchar(30), -- Dinheiro, Debito, Crédito, PIX
    valorpgto		numeric(10,2),
    dtPgto			date
);

CREATE TABLE itensPedido (
	idItensPedido 	int not null auto_increment primary key,
    idPedido 	  	int,
    idProduro 	  	int,
    qtd			  	int,
    preco		  	numeric(10,2),
	meioameio		int  default 0, --  0 => inteira, 1 => 1/2 a 1/2 
    idSaborA		int,
    idSaborB		int
);

