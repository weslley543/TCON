-- Trigger para verificar se já  esta agendado : 

DELIMITER $$
CREATE TRIGGER verifica_agenda
BEFORE INSERT ON agendamento_area_lazer
FOR EACH ROW
BEGIN

    INSERT INTO agendamento_area_lazer
    VALUES
    WHERE (data_esta_com_agenda_liberada);

END$$



-- Trigger para  guardar no historico antes da exclusao
DELIMITER $$
CREATE TRIGGER historico_exclusao
BEFORE DELETE ON usuario
FOR EACH ROW
BEGIN
    INSERT INTO historico_exclusao
    VALUES (codigo_admin,OLD.cod_usuario, CURDATE);
END$$



--Trigger - Historico servicoes concluidos:
DELIMITER $$
CREATE TRIGGER hist_servicos_concluidos
AFTER UPDATE ON servico
FOR EACH ROW 
BEGIN
    INSERT INTO historico_os_realizada
    VALUES (OLD.cod_servico, OLD.obs-servico, OLD.cod_usuario, OLD.data_cadastrada, NEW.data_concluida);
END$$