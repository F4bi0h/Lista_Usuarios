create database db_form;

use db_form;

create table usuarios(
    id_usuario int not null primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    senha varchar(100) not null
);

select * from usuarios;