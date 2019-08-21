CREATE DATABASE TCON;

create table usuario(
    cod_usuario INT NOT NULL AUTO_INCREMENT,
    nome_usuario varchar(100) NOT NULL(60),
    email varchar(100)
    senha varchar(60) NOT NULL,
    tipo_usuario boolean NOT NULL,
    PRIMARY KEY (cod_usuario) 

);

