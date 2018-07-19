<?php
class Editaslider extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Editaslider_Model','Editaslider');

	}

	public function index()	{

		$this->data['data'] = $this->Editaslider->getAll();

		$this->load->view('admin/incs/header');
		$this->load->view('admin/editaslider.php', $this->data);
		$this->load->view('admin/incs/footer');
	}

	public function slider(){
		
		
		$data = array('descricao' => $this->input->post('descricao'),
						'url' => $this->input->post('url')
					);

		$this->Editaslider->save($data, array('id' => $this->input->post('id') ) );

		//$this->data['alert'] = 'success';
		
		redirect(base_url('admin/editaslider'), $this->data );

	}

	
		
}
