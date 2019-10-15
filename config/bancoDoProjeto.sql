create database TCON;

create table usuario(
    cod_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario varchar(100) NOT NULL,
    email varchar(100),
    senha varchar(60) NOT NULL,
    tipo_usuario boolean NOT NULL,
    cpf_usuario varchar(14)NOT NULL,
    rg_usuario varchar (20),
    endereco_usuario varchar(80),
    casa_usuario varchar (4),
    telefone_usuario varchar (11),
    celular_usuario varchar (12)
);

create table servicotipo(
    cod_servico_tipo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_tipo varchar(30),
    data_cadastrou DATETIME,
    data_atualizou DATETIME,
    prioridade int
);

create table servico(
    cod_servico INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cod_servico_tipo int NOT NULL,
    obs_servico varchar(60),
    cod_usuario int NOT NULL,
    data_cadatrada DATETIME NOT NULL,
    data_concluida DATETIME NOT NULL, 
    CONSTRAINT FOREIGN KEY (cod_servico_tipo) REFERENCES servicotipo (cod_servico_tipo),
    CONSTRAINT FOREIGN KEY (cod_usuario) REFERENCES usuario (cod_usuario)
);

create table area_lazer(
    cod_area INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    desc_area VARCHAR (60) NOT NULL 
);

-- Adicionado Cod. do usuario no agendamento da area de lazer 
create table agendamento_area_lazer(
    cod_agendamento INT NOT NULL AUTO_INCREMENT,
    cod_area_lazer INT NOT NULL,
    cod_usuario int not null,
    data_agendou DATETIME,
    data_entrega DATETIME,
    PRIMARY KEY (cod_agendamento),

    CONSTRAINT FOREIGN KEY (cod_area_lazer) REFERENCES area_lazer (cod_area)
    CONSTRAINT FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario)
);


create table historico_exclusao(
    cod_admin int not null,
    cod_usuario int not null,
    data_exclusao DATE not null,
)

create table historico_os_realizada(
    cod_servico INT NOT NULL ,
    obs_servico varchar(60),
    cod_usuario int NOT NULL,
    data_cadatrada DATETIME NOT NULL,
    data_concluida DATETIME NOT NULL

    CONSTRAINT FOREIGN KEY (cod_servico) REFERENCES servico (cod_servico),
    CONSTRAINT FOREIGN KEY (cod_usuario) REFERENCES usuario (cod_usuario)

);