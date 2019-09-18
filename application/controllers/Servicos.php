<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Servico_model', 'modelServico');
	}
	public function cadastrarServico(){
		$dados['cod_servico_tipo'] = $this->input->post('tipoServico');
		$dados['obs_servico'] = $this->input->post('descricao');
		$dados['cod_usuario'] = 1;
		$dados['data_cadatrada'] = $this->input->post('data')." $this->input->post('hora')"; 
		$this->modelServico->cadastroServico($dados);
		redirect('Inicio/dashboard');
	}
	public function getAll(){
		$dados =  $this->modelServico->get();
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($dados,JSON_UNESCAPED_UNICODE);
		
	}
}