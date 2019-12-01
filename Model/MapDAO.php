<?php
require_once  "../Helpers/vendor/autoload.php";


class MapDAO{
    public function insertPostion($data){
        try {
            $client = new MongoDB\Client(
                'mongodb+srv://root:Weslley1234@cluster0-tcv4s.mongodb.net/test?retryWrites=true&w=majority');
        
            $db = $client->BDWork;
            $collection = $db->Localizacao;
            if($collection->insertOne(array("lat"=>-50.191651, "lng"=>-86.3153115, "data" => date('d/m/Y H:i:s')))){
                return true;
            }
            return false;
            
        }catch (Exception $e) {
            // TODO Auto-generated catch block
            var_dump($e);
        }
        
    }
    public function getPosition(){
        $client = new MongoDB\Client(
            'mongodb+srv://root:Weslley1234@cluster0-tcv4s.mongodb.net/test?retryWrites=true&w=majority');
    
        $db = $client->BDWork;
        $collection = $db->Localizacao;
        $a = $collection->find();
        foreach($a as $as){
            $retorno ["lat"] = $as["lat"];
            $retorno ["lng"] = $as["lng"];
            $retorno ["data"] = strtotime($as["data"])
        }
        
        die();
    }
}
