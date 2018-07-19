<?php
class Bemvindo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()	{

		$this->load->view('admin/incs/header');
		$this->load->view('admin/bemvindo.php');
		$this->load->view('admin/incs/footer');
	}

	
		
}
