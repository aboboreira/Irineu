<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('home_model','home');


	}
	
	public function index()
	{
		$this->load->view('incs/header');
		$this->load->view('home');
		$this->load->view('incs/footer');
	}

	
  
}
