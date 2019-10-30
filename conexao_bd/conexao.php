<?php

$host = "localhost";
$usuario = "root";
$senha= "";
$bd = "tcon";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno){
    echo "Falha de conexao:(".$mysqli->connect_errno.")".$mysqli->connect_error;
}else{
   // echo "Conexao bem sucedida";
}


?>