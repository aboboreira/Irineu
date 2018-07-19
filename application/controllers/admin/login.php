<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$this->load->view('admin/incs/header_login');
		$this->load->view('admin/login.php');
		$this->load->view('admin/incs/footer');
	}

public function logar(){
		$this->load->model('admin/Login_Model','Login');
		$this->data = $this->Login->getAll();

		$usuario = $this->input->post("usuario");
		$senha = $this->input->post("senha");
		
		//echo($usuario);
		//echo($senha);exit;

		
		foreach ($this->data as $content) {
			//print_r($content);exit;
			if ($usuario == $content->usuario && $senha == $content->senha) {
				//$sessao=$this->session->set_userdata("logado", 1);


				if(!isset($_SESSION)) 
				{ 
				session_start();
				$_SESSION['logado'] = true;
				redirect(base_url('admin/bemvindo')); 
				}  	
				
			} else {
				//caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login com uma mensagem de erro.
				$dados['erro'] = "Usuário/Senha incorretos";
				redirect(base_url('admin/login'));
			}
		}
		
		//redirect(base_url('admin/inicio'));
		redirect( 'admin/bemvindo' );
	}

	public function logout(){
		unset($_SESSION['logado']);
		session_destroy();
        redirect('admin/login');
	}
}