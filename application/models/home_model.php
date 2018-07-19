<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {
	protected $table = 'slider';

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

	public function getAllConteudo()
	{
		$query = $this->db->get('home');
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}
	
	}

	public function getAllIcones()
	{
		$query = $this->db->get('icones');
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}
	
	}
}
	