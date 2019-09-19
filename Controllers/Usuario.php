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
        if($usuarioDAO->login()){
            header('Location: ' . '../View/Painel_usuario.php', true);
        }else{
            $dado = '{msg:Erro ao conectar}';
            header('Content-Type: application/json; charset=utf-8');
		    echo json_encode($dado,JSON_UNESCAPED_UNICODE);
        }
    } 
}

switch ($_SERVER['REQUEST_METHOD']){
    case 'POST' : $usuario = new Usuario();
                  $dados = $_POST;
                  $usuario->cadastrarUsuario($dados);
                  break; 
    case 'POST' && $POST["op"] == 'login' :
                  $usuario = new Usuario();
                  $dados=$_POST;
                  $usuario->login($dados);

}