CREATE DATABASE TCON;

create table usuario(
    cod_usuario INT NOT NULL AUTO_INCREMENT,
    nome_usuario varchar(100) NOT NULL,
    email varchar(100),
    senha varchar(60) NOT NULL,
    tipo_usuario boolean NOT NULL,
    PRIMARY KEY (cod_usuario)
);

create table servicotipo(
    cod_servico_tipo int NOT NULL PRIMARY KEY,
    nome_tipo varchar(30),
    data_cadastrou DATETIME,
    data_atualizou DATETIME,
    PRIMARY KEY (cod_servico_tipo)
)
create table servico(
    cod_servico INT NOT NULL AUTO_INCREMENT,
    cod_servico_tipo int NOT NULL,
    obs_servico varchar(60),
    cod_usuario int NOT NULL AUTO_INCREMENT,
    data_cadatrada DATETIME NOT NULL,
    data_concluida DATETIME NOT NULL,
    PRIMARY KEY (cod_servico),
    CONSTRAINT FOREIGN KEY (cod_servico_tipo) REFERENCES servicotipo (cod_servico_tipo),
    CONSTRAINT FOREIGN KEY (cod_usuario) REFERENCES usuario (cod_usuario)
);

create table area_lazer(
    cod_area INT NOT NULL AUTO_INCREMENT,
    desc_area VARCHAR NOT NULL (60),
    PRIMARY KEY (cod_area)
);

create table agendamento_area_lazer(
    cod_agendamento INT NOT NULL AUTO_INCREMENT,
    cod_area_lazer INT NOT NULL AUTO_INCREMENT,
    data_agendou DATETIME,
    data_entrega DATETIME,
    
);



