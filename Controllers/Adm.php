<?php
header('Content-Type: text/html; charset=utf-8');
include '../Model/AdmDAO.php';
class Adm{
    public function cadastrarUsrTipo($dados){
        $admDao = new AdmDAO();
        if($admDao->insertUsuarioNovoUsuarioTipo($dados)){
            echo "<script>alert('Tipo de Usuário cadastrado com Sucesso');</script>";
            header('Location: ' . '../servicosAdm.php', true);
            
        }else{
            echo "<script>alert('erro');</script>";
            header('Location: ' . '../servicosAdm.php', true);
            exit();
        }
        
    }
    public function cadastrarServicoTipo($dados){
        $admDao = new AdmDAO();
        if($admDao->insertServicoTipo($dados)){
            echo "<script>alert('Tipo de Usuário cadastrado com Sucesso');</script>";
            header('Location: ' . '../servicosAdm.php', true);
        }else{
            echo "<script>alert('erro');</script>";
            header('Location: ' . '../servicosAdm.php', true);
        }
        
    }
    public function pegarTipoUsr(){
        $admDao= new AdmDAO();
        $retorno = $admDao->tipoUsuario();
        echo $retorno;
    }
    public function cadastrarUsuario($dados){
        $admDao = new AdmDAO();
        $admDao->insertUsuario($dados);
        header('Location: ' . '../servicosAdm.php', true);
       
    }
}

switch ($_SERVER['REQUEST_METHOD']){
    case "POST" && array_key_exists("op", $_POST) && $_POST["op"] == "cadastrarNovoTipoUsuario":
        $adm = new Adm();
        unset($_POST["op"]);
        $adm->cadastrarUsrTipo($_POST);
    break;
    case "POST" && array_key_exists("op", $_POST) && $_POST["op"] == "enviarNovoTipoServico":
        $adm = new Adm();
        unset($_POST["op"]);
        $adm->cadastrarServicoTipo($_POST);
    break;
    case "GET" && array_key_exists("op", $_GET) && $_GET["op"] == "pegarTipoUsr":
        $adm = new Adm();
        unset($_GET["op"]);
        $adm->pegarTipoUsr($_GET);
    break;
    case 'POST' && array_key_exists("op", $_POST)&& $_POST['op']=='cadastro': 
        $adm = new Adm();
        unset($_POST['op']);
        unset($_POST['nome_tipo']);
        unset($_POST['prioridade']);
        $adm->cadastrarUsuario($_POST);
        break;
}