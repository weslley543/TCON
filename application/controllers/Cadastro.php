<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Cadastro_model', 'modelpessoa');
	}
	public function cadastrar(){
		$this->form_validation->set_rules("Nome", "NOME", array('required', 'min_length[4]', 'max_length[60]'));
		$this->form_validation->set_rules("Email", "EMAIL", array('required', 'min_length[4]', 'max_length[60]'));
		$this->form_validation->set_rules("senha", "SENHA", array('required', 'min_length[4]', 'max_length[60]'));
		$this->form_validation->set_rules("cpf", "cpf", array('required', 'min_length[13]', 'max_length[14]'));
		$this->form_validation->set_rules("senha", "SENHA", array('required', 'min_length[6]', 'max_length[30]'));
		
		if($this->form_validation->run()){
			$dados["nome_usuario"] = $this->input->post("Nome");
			$dados["email"] = $this->input->post("Email");
			$dados["senha"] = sha1($this->input->post("senha"));
			$dados["tipo_usuario"] = true;
			$dados["cpf_usuario"] = $this->input->post('cpf');
			$dados["rg_usuario"] = $this->input->post('rg');
			$dados["endereco_usuario"] = $this->input->post('rua');
			$dados["casa_usuario"] = $this->input->post('numerocasa');
			$dados["telefone_usuario"] = $this->input->post('telresidencial');
			$dados["celular_usuario"] = $this->input->post('celular');
			if($this->modelpessoa->cadastro($dados)){

			}else{
				echo 'erro ao cadastrar o usuário';
			}
			
		}else{
			echo validation_errors();
		}
	}
}