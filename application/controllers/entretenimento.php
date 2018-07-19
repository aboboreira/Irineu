<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entretenimento extends CI_Controller {

	
	public function index()
	{
		$this->load->view('incs/header');
		$this->load->view('entretenimento');
		$this->load->view('incs/footer');
	}
}
