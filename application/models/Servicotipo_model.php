<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicotipo_model extends CI_Model {
	private $table = 'servicotipo';
	public function __construct(){
        parent::__construct();
        
	}
    
    public function getAll(){
        $this->db->select('*')->from($this->table);
    }
    public function selectServicoTipo(){
        $options = "<option value=''>Selecione o estado</option>";
        $servicos = getAll();
        foreach($servicos -> result() as $servico{
            $options += "<option value='{$servico->cod_servico_tipo}'>{$servico->nome_tipo}</option>";
            
        }
        return $options;
    }
}