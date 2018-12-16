s<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Users_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->model('Users_model');
        }

        public function display_users(){
            $data['users'] = $this->Users_model->get_users();

            $this->load->view('logged_header');
            $this->load->view('admin_users' , $data);
            $this->load->view('footer');
        }

        public function update_users(){
            $data['firstname'] = $this->input->post('firstname');
            $data['lastname'] = $this->input->post('lastname');
            $data['address'] = $this->input->post('address');
            $data['dob'] = $this->input->post('dob');
            $data['email'] = $this->input->post('email');
            $data['account_type'] = $this->input->post('account_type');
            $data['account_status'] = $this->input->post('account_status');

            $ret = $this->Users_model->update_users($data);

            if($ret != NULL){
                echo "Not null";
            }else{
                echo "NULL";
            }
        }
    }

?>