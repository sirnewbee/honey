<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_account extends CI_Controller{
    public function __construct(){
        $this->load->model("register");
    }

    public function create_user(){
        $data['firstname'] = $this->input->post('firstname');
        $data['lastname'] = $this->input->post('lastname');
        $data['dob'] = $this->input->post('dob');
        $data['address'] = $this->input->post('address');
        // $data[''] = ;
        // $data[''] = ;
        // $data[''] = ;
        // $data[''] = ;

        $ret = $this->register->insert_data($data);

    }
}

?>