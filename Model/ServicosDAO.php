<?php

class ServicosDAO{
    
    public function pegarServicos(){
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL count_servicos(1)") or die ($result->error);
        $servicosTotal = $result->fetch_assoc();
        
        mysqli_close($link);
        
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL servicos_atraso(1)") or die ($result->error);
        $servicosAtrasados = $result->fetch_assoc();
        
        mysqli_close($link);

        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        $result = mysqli_query($link,"CALL servicos_concluidos(1)") or die ($result->error);
        $servicosConcluidos = $result->fetch_assoc();
        
        mysqli_close($link);
        $porcentagem = (floatval($servicosConcluidos["concluidos"])/floatval($servicosTotal["solicitados"]))*100;

        $dados["solicitados"] = $servicosTotal["solicitados"];
        $dados["atrasados"] = $servicosAtrasados["atrasadas"];
        $dados["concluidos"] = $servicosConcluidos["concluidos"];
        $dados["porcentagem"] = $porcentagem;
        return $dados;
        
    }
}
