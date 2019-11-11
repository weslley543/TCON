<?php

class UsuarioDAO{
    public function insertUsuario($dados){
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo 'Erro interno do servidor';
            die();
        }
        $dados["senha"]=sha1($dados["senha"]);
        foreach($dados as $coluna => $valor){
            $cols[] = $coluna;
            $vals[] =  $valor;
        }
        $colnames = implode(", ", $cols);
        $colvals = "'".implode("', '", $vals)."'";
        $query = "INSERT INTO usuario ($colnames) values ($colvals)";
        if(mysqli_query($link,$query)){
            mysqli_close($link);
            return true;
        }
        
        
        return false;
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
    public function pegarUsuarioEmail($email, $senhaNova){
        $link = mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "erro interno no servidor";
            die();
        }
        $query="SELECT cod_usuario FROM usuario WHERE email='$email'";
        $result = mysqli_query($link, $query);
        if($result->num_rows>0){
            $senhaNova = sha1($senhaNova);
            $cod = $result->fetch_array(MYSQLI_ASSOC);
            $query = "UPDATE usuario SET senha = '$senhaNova' where cod_usuario =".$cod["cod_usuario"];
            mysqli_query($link, $query);
            return true;
        }else{
            return false;
        }
    }
}