<?php

class UsuarioDAO{
    public function insertUsuario($dados){
        $link=mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo 'Erro interno do servidor';
            return false;
        }
        $dados["senha"]=sha1($dados["senha"]);
        foreach($dados as $coluna => $valor){
            $cols[] = $coluna;
            $vals[] =  $valor;
        }
        echo("cadastro");
        $colnames = implode(", ", $cols);
        $colvals = "'".implode("', '", $vals)."'";
        $query = "INSERT INTO usuario ($colnames) values ($colvals)";
        mysqli_query($link,$query);
        mysqli_close($link);
        return true;
    }
    public function loginUsuario($dados){
        $link=mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo 'Erro no servidor';
            die();
        }
        $dados["senha"]=sha1($dados["senha"]);
        str_replace($dados["email"],"'","''");
        $email = $dados["email"];
        $senha = $dados["senha"];
        $query = "SELECT * FROM usuario WHERE email='$email' AND senha ='$senha'";
        $result = mysqli_query($link, $query);
        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
    }
    public function pegarUsuarioEmail($email, $token){
        $link = mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "erro interno no servidor";
            die();
        }
        $query="SELECT cod_usuario FROM usuario WHERE email='$email'";
        $result = mysqli_query($link, $query);
        if($result->num_rows>0){
            
            $cod = $result->fetch_array(MYSQLI_ASSOC);
            $query = "UPDATE usuario SET token = '$token', dataexpiracao = DATE_ADD(NOW(), INTERVAL 1 HOUR) where cod_usuario =".$cod["cod_usuario"];
            mysqli_query($link, $query);
            return true;
        }else{
            return false;
        }
    }
    public function resetarSenha($dados){
        $link = mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Erro no servidor";
            die();
        }   
        $email = str_replace($dados["email"], "'", "''");
        $senha = sha1($dados["senha"]);
        $token = $dados["token"];
        $data = date('Y-m-d H:i:s');
        $query = "SELECT cod_usuario from usuario where email = '$email' and token = '$token' and dataexpiracao ";
        $result = mysqli($link, $query);
        if($result->num_rows>0){

        }

        
    }
}