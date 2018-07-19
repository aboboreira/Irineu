<?php
class Editanumeros extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Editanumeros_Model','Editanumeros');

	}

	public function index()	{

		$this->data['data'] = $this->Editanumeros->getAll();

		$this->load->view('admin/incs/header');
		$this->load->view('admin/editanumeros.php', $this->data);
		$this->load->view('admin/incs/footer');
	}

	public function editaPag(){
		
		
		$data = array('titulo' => $this->input->post('titulo'),
						'descricao' => $this->input->post('descricao'),
						'vitorias' => $this->input->post('vitorias'),
						'derrotas' => $this->input->post('derrotas'),
						'empates' => $this->input->post('empates')
					);

		$this->Editanumeros->save($data, array('id' => $this->input->post('id') ) );

		//$this->data['alert'] = 'success';
		
		redirect(base_url('admin/editanumeros'), $this->data );

	}

	
		
}
