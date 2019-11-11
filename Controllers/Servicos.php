<?php
include('../Model/ServicosDAO.php');

class Servicos {
    public function pegarServicos(){
        $servicos = new ServicosDAO();
        $servicosRetornados = $servicos->pegarServicos();
        var_dump($servicosRetornados);

    }
}

switch ($_SERVER['REQUEST_METHOD']){
    case "GET" && $_GET["op"] == "pegarServicos": 
    $servico = new Servicos();
    $servico->pegarServicos();
    break;
}