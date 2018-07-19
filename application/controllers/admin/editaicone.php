<?php
class EditaIcone extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('admin/EditaIcone_Model','EditaIcone');	
		

	}

	public function index()	{
		

		$this->data['data'] = $this->EditaIcone->getAll();
		
		$this->load->view('admin/incs/header');
		$this->load->view('admin/editaicone.php', $this->data);
		$this->load->view('admin/incs/footer');



		}

	public function editaPag(){
		
		$data = array(	'icon' => $this->input->post('icon'),
						'tit_icon' => $this->input->post('tit_icon'),
						'desc_icon' => $this->input->post('desc_icon')
					);

		$this->EditaIcone->save($data, array('id' => $this->input->post('id') ) );

		//$this->data['alert'] = 'success';
		
		redirect(base_url('admin/editaicone'), $this->data );

	}

	public function excluir(){
        $this->load->model('admin/EditaIcone_Model','EditaIcone');
        $this->EditaIcone->delete( array('id' => $this->input->post('id') ) );
    }

	
}
