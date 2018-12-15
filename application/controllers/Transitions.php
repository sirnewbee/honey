<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Transitions extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        /*--------------------------GENERAL------------------------- */
        public function to_login(){
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }

        /*---------------------------CLIENT------------------------- */

        public function client_products(){
            $this->load->view('logged_header');
            $this->load->view('client_products');
            $this->load->view('footer');
        }

        /*---------------------------ADMIN------------------------- */

        public function admin_home(){
            $this->load->view('logged_header');
            $this->load->view('admin_index_content');
            $this->load->view('footer');
        }

        public function admin_products(){
            $this->load->view('admin_header');
            $this->load->view('admin_products');
            $this->load->view('footer');
        }
    }
?>