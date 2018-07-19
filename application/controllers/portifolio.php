<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portifolio extends CI_Controller {

	
	public function index()
	{

		$this->load->model('Portifolio_Model','Portifolio');
		//$this->load->model('EditaGaleria_Model','EditaGaleria');

		$this->data['data'] = $this->Portifolio->getAll();

		$this->data['images'] = $this->Portifolio->getAllimages();

		$this->data['numeros'] = $this->Portifolio->getAllnumeros();

		$this->data['skills'] = $this->Portifolio->getAllskills();


		$this->load->view('incs/header');
		$this->load->view('portifolio', $this->data);
		$this->load->view('incs/footer');
	}
}
