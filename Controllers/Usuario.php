<?php
include('../Model/UsuarioDAO.php');
class Usuario{
    
    public function cadastrarUsuario($dados){
        $usuarioDAO = new UsuarioDAO();
        
        if($usuarioDAO->insertUsuario($dados)){
            header('Location: ' . '../View/Pagina_parabens.html', true);
            exit();
        }
    }
    public function login($dados){
        $usuarioDAO = new UsuarioDAO();
        $dado = $usuarioDAO->loginUsuario($dados);    
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($dado,JSON_UNESCAPED_UNICODE);
         
    } 
}

switch ($_SERVER['REQUEST_METHOD']){
    case 'POST' && $_POST['op']=='cadastro': 
                    $usuario = new Usuario();
                    unset($_POST['op']);
                    $dados = $_POST;
                    $usuario->cadastrarUsuario($dados);
                    break;
    case 'POST' && $_POST['op']=='login' :
                    $usuario = new Usuario();
                    unset($_POST['op']);
                    $dados = $_POST;
                    str_replace($dados['email'],"'", "''");
                    $usuario->login($dados);
                    break;
}