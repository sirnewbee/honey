<?php

class Register extends CI_Model{
	public $firstname;
	public $lastname;
	public $dob;
	public $gender;
	public $email;
	public $password;
	public $address;
	public $username;

	public function get_data(){
		$query = $this->db;

		$query->select('*');
		$query->from('person p');
		$query->join('account a' , 'a.Person_ID = p.Person_ID' , 'left');
		$ret  = $query->get();

		return $ret;
	}

	public function insert_data(){
		$var = NULL;
		$this->firstname = $_POST['firstname'];
		$this->lastname = $_POST['lastname'];
		$this->dob = $_POST['dob'];
		$this->gender = $_POST['gender'];

		if($this->db->insert('person' , $this->query1)){
			$var = $this->db->insert_id();
		}

		return $var;


		// $this->query2->pid = $this->db->insert_id();
		// $this->query2->email = $_POST['email'];
		// $this->query2->password = $_POST['password'];
		// $this->query2->address = $_POST['address'];
		// $this->query2->username = $_POST['username'];

		// $this->db->insert('account' , $this->query2);
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