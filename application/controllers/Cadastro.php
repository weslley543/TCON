<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function _construct(){
		parent::_construct();
		$this->load->library('form_validation');
	}
	public function cadastrar(){
		echo $this->input->post('Nome');
	}
}