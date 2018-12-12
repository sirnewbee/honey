<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_account extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('register_customer');
    }

    public function create_user(){
        $this->load->helper(array('form', 'url'));

        $data['firstname'] = $this->input->post('firstname');
        $data['lastname'] = $this->input->post('lastname');
        $data['dob'] = $this->input->post('dob');
        $data['address'] = $this->input->post('address');
        $data1['customer_id'] = $this->register_customer->insert_data($data);
        $data1['email'] = $this->input->post('email');
        $data1['password'] = $this->input->post('password');
        $this->register_customer->create_account($data1);

    }
}

?>