<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portifolio_Model extends CI_Model {
	protected $table = 'portifolio';

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

	public function getAllimages()
	{
		$query = $this->db->get('galeria');
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}
	
	}

	public function getAllnumeros()
	{
		$query = $this->db->get('numeros');
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}
	
	}

	public function getAllskills()
	{
		$query = $this->db->get('skills');
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}
	
	}
}
	