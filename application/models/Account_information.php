<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_information extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($data){
        $query = $this->db->get_where("Accounts" , array("email"=> $data["email"]));

        foreach ($query->result() as $row){
            if($row->email == $data['email']){
                if($row->password == $data['password']){
                    if($row->account_type == 'c'){
                        $retVal = 'c';
                    }else{
                        $retVal = 'a';
                    }
                }else{
                    $retVal = 'i';
                }

                return $retVal;
            }
        }
    }
}
 
?>