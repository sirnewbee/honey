<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_information extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_account($data){

        if($this->db->get_where("Accounts" , array("email"=> $data['email']))){
            var_dump("success");
        }
        
    }
}

?>