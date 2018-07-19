<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->model('admin/Editasobre_Model','EditaSobre');
	}

	
	public function index()
	{

    $this->data['data'] = $this->EditaSobre->getAll();
		$this->load->view('incs/header');
		$this->load->view('sobre', $this->data);
		$this->load->view('incs/footer');
	}
}
