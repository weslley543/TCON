<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function cadastrar(){
		
		$this->form_validation->set_rules("Nome", "Nome", array('required', 'min_lenght[4]', 'max_lenght[60]'));
		$this->form_validation->set_rules("Email", "Email", array('required', 'min_lenght[4]', 'max_lenght[60]'));
		$this->form_validation->set_rules("senha", "senha", array('required', 'min_lenght[6]', 'max_lenght[60]'));
		$this->form_validation->set_rules("senha2", "senha2", array('required', 'min_lenght[6]', 'max_lenght[60]'));
		$this->form_validation->set_rules("cpf", "cpf", array('required', 'min_lenght[14]', 'max_lenght[14]'));
		$this->form_validation->set_rules("rg", "rg", array('required', 'min_lenght[14]', 'max_lenght[14]'));
		if($this->form_validation->run()){
			echo 'Deu bom';
		}else{
			echo validation_errors();
		}
	}
}