<?php
class Editaskills extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Editaskills_Model','Editaskills');

	}

	public function index()	{

		$this->data['data'] = $this->Editaskills->getAll();

		$this->load->view('admin/incs/header');
		$this->load->view('admin/editaskills.php', $this->data);
		$this->load->view('admin/incs/footer');
	}

	public function editaPag(){
		
		
		$data = array('titulo' => $this->input->post('titulo'),
						'descricao' => $this->input->post('descricao'),
						'ataque' => $this->input->post('ataque'),
						'defesa' => $this->input->post('defesa'),
						'agilidade' => $this->input->post('agilidade'),
						'forca' => $this->input->post('forca')
					);

		$this->Editaskills->save($data, array('id' => $this->input->post('id') ) );

		
    	redirect(base_url('admin/sucesso'), $this->data );
		
		//redirect(base_url('admin/editaskills'), $this->data );

	}

	
		
}
