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
            return false;
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
}