<?php
include('../Model/ServicosDAO.php');

class Servicos {
    public function pegarServicos(){
        $servicos = new ServicosDAO();
        $servicosRetornados = $servicos->pegarServicos();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($servicosRetornados,JSON_UNESCAPED_UNICODE);

    }
}

switch ($_SERVER['REQUEST_METHOD']){
    case "GET" && $_GET["op"] == "pegarServicos": 
    $servico = new Servicos();
    $servico->pegarServicos();
    break;
}