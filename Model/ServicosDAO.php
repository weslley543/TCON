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
}
