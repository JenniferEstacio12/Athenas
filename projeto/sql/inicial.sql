create schema if not exists athenas;
/*criar*/

use athenas; 
/*selecionar*/

create table cadastros(
	id 			       int primary key auto_increment,
	nome 			   varchar(80) not null,
	email 			   varchar(255) not null unique,
  telefone  		   varchar(30) not null,
	password  		   varchar(100) not null
);
/*criar tabela*/