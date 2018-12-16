<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_authentication extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('session');

        $this->load->model("account_information");
    }

    public function get_email(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');

        $ret = $this->account_information->get($data);
        
        if ( $_SESSION['type'] == 'a' ){
            $this->load->view('admin_header');
            $this->load->view('admin_index_content');
        }else if( $_SESSION['type'] == 'c' ){
            $this->load->view('logged_header');
            $this->load->view('client_home');
        }else{
            echo "incorrect password";
        }
        $this->load->view('footer');

    }

    public function logout(){
        if( session_destroy() ){
            $this->load->view('header');
            $this->load->view('index_content');
            $this->load->view('footer');
        }else{
            echo "failed";
        }
    }
}

?>