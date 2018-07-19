<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    
    class Login_model extends My_Model {
        public $table = 'usuario';

        

    public function getAll()
    {
        $query = $this->db->get($this->table);
        
        $result = $query->result();

        if ($query->num_rows()>0){
            return $result;
        }else{
            return null;
        }   
    }

    // //Validação do usuário      
    //     public function validacao($usuario, $senha){
            
        
    //     $this->db->get("usuario", $usuario);
    //     $this->db->get("senha", $senha);
    //     $usuario = $this->db->get("usuario")->row_array();
    //     return $usuario;
    
    // }
        
 }
        


    
	

	