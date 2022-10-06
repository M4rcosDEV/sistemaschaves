create schema SGC;
use SGC;

create table cliente (
	id_cliente integer auto_increment primary key, 
	nome integer not null, 
	matricula integer not null, 
    email varchar(30) not null,
	cpf_cliente integer unique
); 

create table predio ( 
	id_predio integer auto_increment primary key
); 

create table funcionario ( 
	id_funcionario integer auto_increment primary key,
	nome integer not null,  
	matricula integer not null,  
	cpf integer unique,  
	tipo_func varchar(55) not null
); 

create table sala ( 
	id_sala integer auto_increment primary key,  
	id_predio integer,
    foreign key(id_predio) references predio(id_predio)
); 

create table chave ( 
	id_chave integer auto_increment primary key,  
	situacao integer not null,  
	id_sala integer not null,
    foreign key(id_sala) references sala(id_sala)
); 

create table agendar (
	id_chave integer,
    id_cliente integer, 
	turno integer not null, 
    data_agendar integer not null,  
    hora integer not null,
	foreign key(id_chave) references chave(id_chave),
    foreign key(id_cliente) references cliente(id_cliente),
    primary key(id_chave, id_cliente)
); 

create table emprestimo (
	id_emprestimo integer auto_increment primary key,
    id_chave integer,
    id_cliente integer,
	foreign key(id_chave, id_cliente) references agendar(id_chave, id_cliente),
    foreign key(id_funcionario) references funcionario(id_funcionario)
); 