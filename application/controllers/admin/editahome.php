<?php
class EditaHome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('admin/Editahome_Model','Editahome');	
		

	}

	public function index()	{
		

		$this->data['data'] = $this->Editahome->getAll();
		
		$this->load->view('admin/incs/header');
		$this->load->view('admin/editahome.php', $this->data);
		$this->load->view('admin/incs/footer');



		}

	public function editaPag(){
		
		$data = array(	'titulo' => $this->input->post('titulo'),
						'descricao' => $this->input->post('descricao'),
						'titulo2' => $this->input->post('titulo2'),
						'descricao2' => $this->input->post('descricao2'),
					);

		$this->Editahome->save($data, array('id' => $this->input->post('id') ) );

		//$this->data['alert'] = 'success';
		
		redirect(base_url('admin/editahome'), $this->data );

	}

	
}
