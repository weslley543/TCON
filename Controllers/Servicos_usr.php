<?php
include('../Model/ServicosDAO_usr.php');

class Servicos_usr{

    public function servicosSolicitados_Usr($codUsuario){
        $servicos = new ServicosDAO_usr();
        $dados = $servicos->servicosSolicitados_usr($codUsuario);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($dados,JSON_UNESCAPED_UNICODE);
    }

    public function pegarServicos($codUsuario){
        $servicos = new ServicosDAO_usr();
        $dados = $servicos->pegarServicos($codUsuario);
        header('Content-Type: application/json; charset=utf-8');
        echo $dados;
    }

    public function agendamentos($codUsuario){
        $servicos = new ServicosDAO_usr();
        $dados = $servicos->agendamentos_usr($codUsuario);
        header('Content-Type: application/json; charset=utf-8');
        echo $dados;
    }

    public function liberacoes($codUsuario){
        $servicos = new ServicosDAO_usr();
        $dados = $servicos->liberacoes_usr($codUsuario);
        header('Content-Type: application/json; charset=utf-8');
        echo $dados;
    }

    public function perfil_usr($codUsuario){
        $servicos = new ServicosDAO_usr();
        $dados = $servicos->perfil_usr($codUsuario);
        header('Content-Type: application/json; charset=utf-8');
        echo $dados;
    }


}




    switch($_SERVER['REQUEST_METHOD']){
        
        case $_GET && array_key_exists('op', $_GET) &&  $_GET["op"] == "servicosSolicitados":
            $servico = new Servicos_usr();
            unset($_GET["op"]);
            $servico->servicosSolicitados_Usr(1);   
        break;   
        
        
        case $_GET && array_key_exists('op', $_GET) && $_GET['op'] == "pegarServicos_usr":
            $servico = new Servicos_usr();
            unset($_GET['op']);
            $servico->pegarServicos(1);
        break;

        case $_GET && array_key_exists('op', $_GET) && $_GET['op'] == "agendamentos_usr":
            $servico = new Servicos_usr();
            unset($_GET['op']);
            $servico->agendamentos(1);
        break;

        case $_GET && array_key_exists('op', $_GET) && $_GET['op'] == "liberacao_usr":
            $servico = new Servicos_usr();
            unset($_GET['op']);
            $servico->liberacoes(1);
        break;     
        
        
        case $_GET && array_key_exists('op', $_GET) && $_GET['op'] == "perfil_usr":
            $servico = new Servicos_usr();
            unset($_GET['op']);
            $servico->perfil_usr(1);
        break;



    }







?>
