<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editasobre_Model extends CI_Model {
	protected $table = 'sobre';

	public function __construct(){
		parent::__construct();
	}


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
	
}
	