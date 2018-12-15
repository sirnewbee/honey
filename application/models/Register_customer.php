<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_customer extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }

	public function get_data(){
		$query = $this->db;

		$query->select('*');
		$query->from('person p');
		$query->join('account a' , 'a.Person_ID = p.Person_ID' , 'left');
		$ret  = $query->get();

		return $ret;
	}

	public function insert_data($data){
		if($this->db->insert('Customers' , $data)){
			$var = $this->db->insert_id();
		}

		return $var;
	}

	public function create_account($data){
		if($this->db->insert('Accounts' , $data)){
			$var = $this->db->insert_id();
		}

		return $var;
	}

	public function update_data($id){
		$this->firstname = $_POST['firstname'];
		$this->lastname = $_POST['lastname'];
		$this->address = $_POST['address'];
		$this->email = $_POST['email'];

		$this->db->update('person' , $this , array('account_ID' => $id));
	}
}

?>