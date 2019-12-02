<?php
include('../Model/ServicosDAO_usr.php');

class Servicos_usr{

    public function pegarServicos_Usr($codUsuario){
        $servicos = new ServicosDAO_usr();
        $dados = $servicos->pegarServicos_usr($codUsuario);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($dados,JSON_UNESCAPED_UNICODE);
    }
}




    switch($_SERVER['REQUEST_METHOD']){
        
        case $_GET && array_key_exists('op', $_GET) &&  $_GET["op"] == "servicosSolicitados":
            $servico = new Servicos_usr();
            unset($_GET["op"]);
            $servico->pegarServicos_Usr(1);   
        break;      

    }







?>
