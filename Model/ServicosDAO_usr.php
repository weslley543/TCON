<?php

class ServicosDAO_usr{
    
    public function servicosSolicitados_usr($cod_usuario){

        $cod_usuario = 1;
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }



        $result = mysqli_query($link,"CALL count_servicos_usr($cod_usuario)") or die ($result->error);
        $servicosTotal = $result->fetch_assoc();
        
        mysqli_close($link);
        
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL servicos_atraso_usr($cod_usuario)") or die ($result->error);
        $servicosAtrasados = $result->fetch_assoc();
        
        mysqli_close($link);

        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL servicos_concluidos_usr($cod_usuario)") or die ($result->error);
        $servicosConcluidos = $result->fetch_assoc();
        
        mysqli_close($link);
        
        if(floatval($servicosTotal["solicitados"])==0){
            $porcentagem = (floatval($servicosConcluidos["concluidas"])/1)*100;
        }else{
            $porcentagem = (floatval($servicosConcluidos["concluidas"])/floatval($servicosTotal["solicitados"]))*100;
        }
        
        

        $dados["solicitados"] = $servicosTotal["solicitados"];
        $dados["atrasados"] = $servicosAtrasados["atrasadas"];
        $dados["concluidos"] = $servicosConcluidos["concluidas"];
        $dados["porcentagem"] = $porcentagem;

        return $dados;
        
    }

    
    public function agendarArea($dados){
        $link = mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Erro interno do servidor";
            die();
        }
        $dados["data_agendou"] = date("Y/m/d H:m:s");
        if(isset($dados["observacao"])){
            $dados["observacao"] = "Sem obs";
        }
        foreach($dados as $coluna => $valor){
            $cols[] = $coluna;
            $vals[] =  $valor;
        }
        
        $colnames = implode(", ", $cols);
        $colvals = "'".implode("', '", $vals)."'";
        $query = "INSERT INTO agendamento_area_lazer ($colnames) values ($colvals)";
        //echo $query;
        $result=mysqli_query($link, $query);
        if(!$result){
            return false;
            die();
        }
        return true;
        
    }


    public function pegarServicos($cod_usuario){
        
        $cod_usuario = $cod_usuario;
        $link = mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Erro interno do servidor";
            die();
        }

        $query = "CALL servicos_usr($cod_usuario)";
        $result = mysqli_query($link,$query);

        while($row = $result->fetch_assoc()){
            $resultSet[] = $row;
        }
        $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
        mysqli_close($link);

        return $dados;
   }//end servicoSolicitados


   public function agendamentos_usr($cod_usuario){
      
       $cod_usuario = $cod_usuario;
       $link = mysqli_connect("localhost", "root", "", "tcon");

       if(!$link){
           echo "Erro interno do servidor";
           die();
       }

       $query = "CALL areas_reservadas_usr($cod_usuario);";
       $result = mysqli_query($link,$query);

       while($row = $result->fetch_assoc()){
             $resultSet[] = $row;
       }
       $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
       mysqli_close($link);
          
       return $dados;

   }//end agendamentos


   public function liberacoes_usr($cod_usuario){

    $cod_usuario = $cod_usuario;
    $link = mysqli_connect("localhost", "root", "", "tcon");
    if(!$link){
            echo "Erro interno do servidor";
            die();
    }

    $query = "CALL liberacoes_usr($cod_usuario)";
    $result = mysqli_query($link,$query);
    
    while($row = $result->fetch_assoc()){
        $resultSet[] = $row;
    }

    $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
    mysqli_close($link);

    return $dados;
   }//end liberacoes


   public function perfil_usr($cod_usuario){
        
        $cod_usuario = 1;
        $link = mysqli_connect("localhost", "root", "","tcon");

        if(!$link){
            echo 'Erro interno do servidor';
            die();
        }

        $query = "SELECT * FROM usuario WHERE cod_usuario = $cod_usuario";
        $result = mysqli_query($link, $query);

        while($row = $result->fetch_assoc()){
            $resultSet[] = $row;
        }

        $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
        mysqli_close($link);

        return $dados;
   }//end perfil do usuario



}
