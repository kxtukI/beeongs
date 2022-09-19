create database projeto_ongs;

use projeto_ongs;  

create table usuarios (
	idUsuarios int auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null,
    cpf int(11),
    senha varchar(255) not null,
    telefone varchar(255),
    foto varchar(255),
    dataCadastro datetime,
    primary key (id, cpf)
);

create table ongs (
	idOngs int auto_increment primary key,
    nome varchar(255) not null,
    categoria varchar(255) not null
);

create table posts (
	idPosts int auto_increment primary key,
    img varchar(255),
    userId int,
    descricao varchar(255)
);

