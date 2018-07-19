<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homefull extends CI_Controller {

	
	public function index()
	{
		
		$this->load->model('Homefull_Model','Homefull');

		$this->data['data'] = $this->Homefull->getAll();
		$this->data['icones'] = $this->Homefull->getAllIcones();
		
		

		$this->load->view('incs/header');
		$this->load->view('homefull' , $this->data);
		$this->load->view('incs/footer');
	}
}
