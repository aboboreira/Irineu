<?php
class Editagaleria extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin/Editagaleria_Model','Editagaleria');
    }

    public function index() {

    $this->data['data'] = $this->Editagaleria->getAll();
        $this->load->view('admin/incs/header');
        $this->load->view('admin/editagaleria.php', $this->data);
        $this->load->view('admin/incs/footer');
    }

    public function editaPag(){
       $path = "./uploads/";
 
        if ( ! is_dir($path)) {
        mkdir($path, 0777, $recursive = true);
         }
 
        $configUpload['upload_path']   = $path;
        
        $configUpload['allowed_types'] = 'jpg|png|gif|pdf|zip|rar|doc|xls';
        
        $configUpload['encrypt_name']  = TRUE;

        $this->load->library('upload');
 
        // passamos as configurações para a library upload
        $this->upload->initialize($configUpload);
 
        // verificamos se o upload foi processado com sucesso
        if ( ! $this->upload->do_upload('arquivo'))
        {
            
            $data= array('error' => $this->upload->display_errors());
            $this->load->view('admin/editagaleria.php',$data);
        }
        else
        {
            //se correu tudo bem, recuperamos os dados do arquivo
            $data['dadosArquivo'] = $this->upload->data();
            // definimos o path original do arquivo
            $arquivoPath = 'uploads/'."/".$data['dadosArquivo']['file_name'];
            // passando para o array '$data'
            $data['urlArquivo'] = base_url($arquivoPath);
            // definimos a URL para download
            //$downloadPath = 'download/'.$folder."/".$data['dadosArquivo']['file_name'];
            $downloadPath = 'uploads/'."/".$data['dadosArquivo']['file_name'];
            $min = $data['dadosArquivo']['file_name'];
            // passando para o array '$data'
            $data['urlDownload'] = base_url($downloadPath);
 
            // carregamos a view com as informações e link para download
            $this->load->view('admin/editagaleria.php',$data);
        }   

        
        $data = array(  'titulo' => $this->input->post('titulo'),
                        'arquivo' => $min
                    );

        $this->Editagaleria->save($data, array('id' => $this->input->post('id') ) );

        //$this->data['alert'] = 'success';
        
        redirect(base_url('admin/editagaleria') );

    }

    public function alterar(){

        $this->load->model('admin/Editagaleria_Model','Editagaleria');
        $id = $this->input->post('id');     
        $titulo = $this->input->post('titulo');
               

        
         $data = array(
            'titulo' => $titulo           
        );

        $this->Editagaleria->save( $data, array('id' => $id) );

        
    }

    

    public function deletar(){
        $this->load->model('admin/Editagaleria_Model','Editagaleria');
        $this->Editagaleria->delete( array('id' => $this->input->post('id') ) );
    }
}
