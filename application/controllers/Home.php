<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		
		$this->load->model('Home_Model','Home');

		$this->data['data'] = $this->Home->getAll();
		$this->data['conteudo'] = $this->Home->getAllConteudo();
		$this->data['icones'] = $this->Home->getAllIcones();
		
		

		$this->load->view('incs/header');
		$this->load->view('home' , $this->data );
		$this->load->view('incs/footer');
	}
}
