<?php

class ServicosDAO{
    
    public function pegarServicos($cod_usuario){
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL count_servicos($cod_usuario)") or die ($result->error);
        $servicosTotal = $result->fetch_assoc();
        
        mysqli_close($link);
        
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL servicos_atraso($cod_usuario)") or die ($result->error);
        $servicosAtrasados = $result->fetch_assoc();
        
        mysqli_close($link);

        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL servicos_concluidos($cod_usuario)") or die ($result->error);
        $servicosConcluidos = $result->fetch_assoc();
        
        mysqli_close($link);
        
        if(floatval($servicosTotal["solicitados"])==0){
            $porcentagem = (floatval($servicosConcluidos["concluidos"])/1)*100;
        }else{
            $porcentagem = (floatval($servicosConcluidos["concluidos"])/floatval($servicosTotal["solicitados"]))*100;
        }
        
        

        $dados["solicitados"] = $servicosTotal["solicitados"];
        $dados["atrasados"] = $servicosAtrasados["atrasadas"];
        $dados["concluidos"] = $servicosConcluidos["concluidos"];
        $dados["porcentagem"] = $porcentagem;
        return $dados;
        
    }

    
    public function inserirServico($dados){
        $link = mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Erro interno do servidor";
            die();
        }
        $dados["data_cadatrada"] = date("Y/m/d H:m:s");
        if(isset($dados["obs_servico"])){
            $dados["obs_servico"] = "Sem obs";
        }
        foreach($dados as $coluna => $valor){
            $cols[] = $coluna;
            $vals[] =  $valor;
        }
        
        $colnames = implode(", ", $cols);
        $colvals = "'".implode("', '", $vals)."'";
        $query = "INSERT INTO servico ($colnames) values ($colvals)";
        $result=mysqli_query($link, $query);
        if(!$result){
            return false;
            die();
        }
        return true;
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

    public function servicoSolicitados(){
        
        $link = mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Erro interno do servidor";
            die();
        }

        $query = "SELECT * FROM servico";
        $result = mysqli_query($link,$query);

        while($row = $result->fetch_assoc()){
            $resultSet[] = $row;
        }
        $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
        mysqli_close($link);
        return $dados;
    

        //return $servicosSolicitados;

   }//end servicoSolicitados

   public function agendamentos(){
       $link = mysqli_connect("localhost", "root", "", "tcon");
       if(!$link){
           echo "Erro interno do servidor";
           die();
       }

       $query = "CALL areas_reservadas()";
       $result = mysqli_query($link,$query);
       
       while($row = $result->fetch_assoc()){
           $resultSet[] = $row;
       }

       $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
       mysqli_close($link);
       
       return $dados;

   }//end agendamentos

   public function liberacoes(){
    $link = mysqli_connect("localhost", "root", "", "tcon");
    if(!$link){
            echo "Erro interno do servidor";
            die();
    }

    $query = "CALL liberacaoHoje()";
    $result = mysqli_query($link,$query);
    
    while($row = $result->fetch_assoc()){
        $resultSet[] = $row;
    }

    $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
    mysqli_close($link);

    return $dados;
   }//end liberacoes


   public function usuariosCadastrados(){
        
        $link = mysqli_connect("localhost", "root", "","tcon");

        if(!$link){
            echo 'Erro interno do servidor';
            die();
        }

        $query = "CALL usuariosCadastrados()";
        $result = mysqli_query($link, $query);

        while($row = $result->fetch_assoc()){
            $resultSet[] = $row;
        }

        $dados = json_encode($resultSet, JSON_UNESCAPED_UNICODE);
        mysqli_close($link);
        return $dados;
   }//end usuarios Cadastrados


}
