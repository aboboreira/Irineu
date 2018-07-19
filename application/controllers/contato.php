<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('admin/EditaContatoIcon_Model','EditaContatoIcon');	
		$this->load->model('admin/EditaContato_Model','EditaContato');
		$this->load->model('admin/EnviaMensagem_Model','EnviaMensagem');
		

	}


	
	public function index()
	{

		$this->data['data'] = $this->EditaContatoIcon->getAll();
		$this->data['info'] = $this->EditaContato->getAll();


		$this->load->view('incs/header');
		$this->load->view('contato', $this->data);
		$this->load->view('incs/footer');
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

	public function enviarmensagem(){
		
		
		$data = array('nome' => $this->input->post('nome'),
						'email' => $this->input->post('email'),
						'telefone' => $this->input->post('telefone'),
						'mensagem' => $this->input->post('mensagem')
					);

		$this->EnviaMensagem->save($data, array('id' => $this->input->post('id') ) );


		

		redirect(base_url('contato') );
   
		
		//redirect(base_url('admin/editaskills'), $this->data );

	}

}
