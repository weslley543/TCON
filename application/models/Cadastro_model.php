<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_Model {
	private $table = 'usuario';
	public function __construct(){
        parent::__construct();
        
	}
    
    public function cadastro($dados){
        $this->db->insert($this->table,$dados);
    }
}