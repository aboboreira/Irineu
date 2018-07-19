<?php
class ExibirMensagens extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/EnviaMensagem_Model','EnviaMensagem');
	}

	public function index()	{


		$this->data['data'] = $this->EnviaMensagem->getAll();
		
		$this->load->view('admin/incs/header');
		$this->load->view('admin/exibirmensagens.php',  $this->data);
		$this->load->view('admin/incs/footer');
	}

	
}
