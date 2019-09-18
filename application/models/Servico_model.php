<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico_model extends CI_Model {
	private $table = 'servico';
	public function __construct(){
        parent::__construct();
        
	}
    
    public function cadastroServico($dados){
        $this->db->insert($this->table,$dados);
    }
    public function get(){
        return $this->db->get($this->table)->result();
    }
}