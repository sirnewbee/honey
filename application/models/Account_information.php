<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_information extends CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }

    public function get($data){
        $query = $this->db->get_where("Accounts" , array("email"=> $data["email"]));

        foreach ($query->result() as $row){
            $session_data = array(
                'logged_in' => TRUE,
                'email'=> $row->email,
                'account_id'=> $row->account_id,
                'type'=> $row->account_type
            );

            if($row->email == $data['email']){
                if($row->password == $data['password']){
                    $this->session->set_userdata($session_data);

                    if(isset($_SESSION['logged_in'])){
                        echo "Session start";
                        return TRUE;
                    }
                }else{
                    return FALSE;
                }
            }else{
                return 'i';
            }
        }
    }
}
 
?>