/* 
    PROCEDURES -  PROJETO TCON
*/


-- Insercao de Novo Usuario:
DELIMITER $$
CREATE PROCEDURE novoUsuario_admin(nome varchar(60),email varchar(60),cpf varchar(14), rg varchar(20), endereco varcahr(80), casa varchar(4), telefone varchar(11), celular varchar(12),senha varchar(60) )
BEGIN  

INSERT INTO usuario
VALUES ("",nome,email,senha,0,cpf,rg,endereco,casa,telefone,celular);

END $$


-- Insercao de Novo Administrador:
DELIMITER $$
CREATE PROCEDURE novoUsuario_admin(nome varchar(60),email varchar(60),cpf varchar(14), rg varchar(20), endereco varcahr(80), casa varchar(4), telefone varchar(11), celular varchar(12),senha varchar(60) )
BEGIN  

INSERT INTO usuario
VALUES ("",nome,email,senha,1,cpf,rg,endereco,casa,telefone,celular);

END $$


-- Insercao servico Eletrica:
DELIMITER $$
CREATE PROCEDURE os_Eletrica(observacao varchar(60), usuario int, data_cad DATE, data_concluida DATE)
BEGIN  

INSERT INTO servico
VALUES ("",1,observacao,usuario,data_cad,data_concluida);

END $$


-- Insercao servico Manutencao:
DELIMITER $$
CREATE PROCEDURE os_Manutencao(observacao varchar(60), usuario int, data_cad DATE, data_concluida DATE)
BEGIN  

INSERT INTO servico
VALUES ("",2,observacao,usuario,data_cad,data_concluida);

END $$


-- Insercao servico Seguranca:
DELIMITER $$
CREATE PROCEDURE os_Seguranca(observacao varchar(60), usuario int, data_cad DATE, data_concluida DATE)
BEGIN  

INSERT INTO servico
VALUES ("",3,observacao,usuario,data_cad,data_concluida);

END $$


-- Agendamentos Area de Lazer:
DELIMITER $$
CREATE PROCEDURE agendamento_area_lazer(area_lazer, data_agendada date, data_entrega date)
BEGIN  

INSERT INTO servico
VALUES ("",1,observacao,usuario,data_cad,data_concluida);

END $$


-- LIBERAR DE NOVAS PESSOAS PARA ENTRAR NO CONDOMINIO:
DELIMITER $$
CREATE PROCEDURE liberar_Pessoa(nome_pessoa_cpf varchar(60), usuario int, data_cad DATE, data_concluida DATE)
BEGIN  

INSERT INTO servico
VALUES ("",4,nome_pessoa_cpf,usuario,data_cad,data_concluida);

END $$


-- Excluir usuario:
DELIMITER $$
CREATE PROCEDURE excluir_usuario(codigo_admin int ,codigo_usuario int not null)
BEGIN
    DELETE FROM usuario
    WHERE usuario.cod_usuario = codigo_usuario
END$$


--Contador servicos solicitados

DELIMITER $$
CREATE PROCEDURE count_servicos(usuario int)
BEGIN

    SELECT COUNT(cod_usuario) as solicitados FROM servico
    WHERE usuario = servico.cod_usuario;

END $$



-- Pedidos em atraso
-- obs.: adcionar uma flag de conclusao;

DELIMITER $$
CREATE PROCEDURE servicos_atraso(id_usuario int)
DECLARE @DataAtual DATETIME
    SET @DataAtual = GETDATE()
BEGIN
    SELECT COUNT(cod_usuario) as atraso FROM servico
    WHERE  @DataAtual < servico.data_cadatrada; 
END $$

-- Pedidos Concluidos: 

DELIMITER $$
CREATE PROCEDURE servicos_concluidos(id_usuario int)
BEGIN
    SELECT COUNT(cod_usuario) as concluidas FROM servico
    WHERE  servico.data_concluida > servico.data_cadatrada and servico.cod_usuario = id_usuario; 
END $$