<?php

class ServicosDAO(){
    public function pegarServicos(){
        $link= mysqli_connect("localhost", "root", "", "tcon");
        if(!$link){
            echo "Problema interno do servidor";
            die();
        }
        mysqli_query();
    }
}