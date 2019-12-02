<?php

class AdmDAO{
    public function insertUsuarioNovoUsuarioTipo($dados){
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo 'Erro interno do servidor';
            die();
        }
        
        foreach($dados as $coluna => $valor){
            $cols[] = $coluna;
            $vals[] =  $valor;
        }
        $colnames = implode(", ", $cols);
        $colvals = "'".implode("', '", $vals)."'";
        $query = "INSERT INTO usuario_tipo ($colnames) values ($colvals)";
        if(mysqli_query($link,$query)){
            mysqli_close($link);
            return true;
        }
        
        
        return false;
    }
    public function insertServicoTipo($dados){
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo 'Erro interno do servidor';
            die();
        }
        $dados["data_cadastrou"] = date('Y/m/d H:i:s');
        foreach($dados as $coluna => $valor){
            $cols[] = $coluna;
            $vals[] =  $valor;
        }
        $colnames = implode(", ", $cols);
        $colvals = "'".implode("', '", $vals)."'";
        $query = "INSERT INTO servicotipo ($colnames) values ($colvals)";
        
        if(mysqli_query($link,$query)){
            mysqli_close($link);
            return true;
        }
        
        
        return false;
    }
    public function tipoUsuario(){
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo 'Erro interno do servidor';
            die();
        }
        $query = 'SELECT cod_tipo, nome_tipo FROM usuario_tipo';
        $result = mysqli_query($link, $query);
        while($row = $result->fetch_assoc()){
            $dados[] = $row;
        }
        $dados = json_encode($dados, JSON_UNESCAPED_UNICODE);
        mysqli_close($link);
        return $dados;
    }
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
}