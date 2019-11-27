<?php
include('../Model/ServicosDAO.php');
class Servicos {

    public function pegarServicos($cod_usuario){
          $servicos = new ServicosDAO();
          $servicosRetornados = $servicos->pegarServicos($cod_usuario);
          header('Content-Type: application/json; charset=utf-8');
          echo json_encode($servicosRetornados,JSON_UNESCAPED_UNICODE);
        
    }
    
    public function inserirServico($dados){
        $servicos = new ServicosDAO();
        if($servicos->inserirServico($dados)){
            echo "<script>alert('Serviço inserido com sucesso');</script>";
            header('location: ../dashboard_usr.php?ref=usr_formulario');
        }else{
            echo "<script>alert('Ocorreu um problema ao inserir a solicitação');</script>";
        }
    }
}

    switch ($_SERVER['REQUEST_METHOD']){
        case "GET" && $_GET["op"] == "pegarServicos": 
            $servico = new Servicos();
            $servico->pegarServicos(intval($_GET["cod_usuario"]));
        break;
        
        case "POST" && $_POST["op"] == "cadastrarSevico":
            $servico = new Servicos();
            unset($_POST["op"]);
            $servico->inserirServico($_POST);
        break;
    }