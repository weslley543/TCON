<?php

class UsuarioDAO{
    public function insertUsuario($dados){
        $link=mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo 'Erro interno do servidor';
        }
        $dados["senha"]=sha1($dados["senha"]);
        foreach($dados as $coluna => $valor){
            $cols[] = $coluna;
            $vals[] =  $valor;
        }
        
        $colnames = implode(", ", $cols);
        $colvals = "'".implode("', '", $vals)."'";
        $query = "INSERT INTO usuario ($colnames) values ($colvals)";
        mysqli_query($link,$query);
        return true;
    }
}