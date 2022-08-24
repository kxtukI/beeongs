create database projeto_ongs;

select * from usuarios;
	
select id, email from usuarios where email = "felipe@gmail.com" and senha = "12345";    
    
create table usuarios (
	id int auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null,
    cpf int(11),
    senha varchar(255) not null,
    telefone varchar(255),
    foto varchar(255),
    dataCadastro datetime,
    primary key (id, cpf)
);

create table posts (
	id int auto_increment primary key,
    img varchar(255),
    userId int,
    descricao varchar(255)
);

