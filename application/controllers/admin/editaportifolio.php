<?php
class EditaPortifolio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Editaportifolio_Model','EditaPortifolio');
	}

	public function index()	{


		$this->data['data'] = $this->EditaPortifolio->getAll();
		
		$this->load->view('admin/incs/header');
		$this->load->view('admin/editaportifolio.php',  $this->data);
		$this->load->view('admin/incs/footer');
	}

	public function editaPag(){
		
		$data = array(	'titulo' => $this->input->post('titulo'),
						'descricao' => $this->input->post('descricao'),
						'sub_titulo' => $this->input->post('sub_titulo'),
						'sub_descricao' => $this->input->post('sub_descricao')
					);

		$this->EditaPortifolio->save($data, array('id' => $this->input->post('id') ) );

		//$this->data['alert'] = 'success';
		
		redirect(base_url('admin/editaportifolio'), $this->data );

	}
}
