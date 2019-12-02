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
    }







?>
