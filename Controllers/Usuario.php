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
}

switch ($_SERVER['REQUEST_METHOD']){
    case 'POST' : $usuario = new Usuario();
                  $dados = $_POST;
                  $usuario->cadastrarUsuario($dados);
                  break; 
}