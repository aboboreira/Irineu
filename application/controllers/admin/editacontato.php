<?php
class Editacontato extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Editacontato_Model','Editacontato');

	}

	public function index()	{

		$this->data['data'] = $this->Editacontato->getAll();

		$this->load->view('admin/incs/header');
		$this->load->view('admin/editacontato.php', $this->data);
		$this->load->view('admin/incs/footer');
	}

	public function editaPag(){
		
		
		$data = array('titulo1' => $this->input->post('titulo1'),
						'descricao1' => $this->input->post('descricao1'),
						'titulo2' => $this->input->post('titulo2'),
						'descricao2' => $this->input->post('descricao2'),
						'input1' => $this->input->post('input1'),
						'input2' => $this->input->post('input2'),
						'input3' => $this->input->post('input3'),
						'input4' => $this->input->post('input4'),
						'botao' => $this->input->post('botao')
					);

		$this->Editacontato->save($data, array('id' => $this->input->post('id') ) );

		
    	redirect(base_url('admin/sucesso'), $this->data );
		
		//redirect(base_url('admin/editaskills'), $this->data );

	}

	
		
}
