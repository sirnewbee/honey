<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_authentication extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model("account_information");
    }

    public function get_email(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');

        $this->account_information->get_account($data);
    }
}

?>