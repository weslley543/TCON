<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico_tipo extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Servicotipo_model', 'model');
	}
	public function getServicos(){
         echo 'tá aqui';
         
	}
}