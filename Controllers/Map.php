<?php
include '../Model/MapDAO.php';
header('Content-Type: text/html; charset=utf-8');
class Map{
    public function insertPosition($data){
        $map = new MapDAO();
        if($retorno = $map->insertPostion($data)){
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(array("retorno"=>$retorno),JSON_UNESCAPED_UNICODE);
        }else{
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(array("msg"=>'ocorreu um erro'),JSON_UNESCAPED_UNICODE);
        }
    }
    public function getPositions(){
        $map= new MapDAO();
        if($retorno = $map->getPosition()){
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(array("retorno"=>$retorno),JSON_UNESCAPED_UNICODE);
        }
    }
}


$map = new Map();
$map->getPositions();