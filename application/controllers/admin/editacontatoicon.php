<?php
class EditaContatoIcon extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('admin/EditaContatoIcon_Model','EditaContatoIcon');	
		

	}

	public function index()	{
		

		$this->data['data'] = $this->EditaContatoIcon->getAll();
		
		$this->load->view('admin/incs/header');
		$this->load->view('admin/editacontatoicon.php', $this->data);
		$this->load->view('admin/incs/footer');



		}

	public function editaPag(){
		
		$data = array(	'icon' => $this->input->post('icon'),
						'tit_icon' => $this->input->post('tit_icon'),
						'desc_icon' => $this->input->post('desc_icon')
					);

		$this->EditaContatoIcon->save($data, array('id' => $this->input->post('id') ) );

		//$this->data['alert'] = 'success';
		
		redirect(base_url('admin/editacontatoicon'), $this->data );

	}

	public function excluir(){
        $this->load->model('admin/EditaContatoIcon_Model','EditaContatoIcon');
        $this->EditaContatoIcon->delete( array('id' => $this->input->post('id') ) );
    }

	
}
