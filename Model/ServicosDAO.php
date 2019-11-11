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

        
    }
}
