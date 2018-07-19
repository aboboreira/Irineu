<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homefull_Model extends My_Model {
	protected $table = 'home';
	//protected $tabela = 'icones';

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
	