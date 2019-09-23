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
        // if(){
        //     echo 'logou';
        // }else{
        //     echo 'não logou';
        // }
        $usuarioDAO->loginUsuario($dados);
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