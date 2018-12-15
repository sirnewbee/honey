<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Products_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->helper(array('form', 'url'));

            $this->load->model('Products_model');
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpeg|png';
                $config['max_size']             = 3000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        foreach ($error as $err){
                            echo $err;
                        }

                        

                }
                else
                {
                        $dataPic = array('upload_data' => $this->upload->data());

                        $data['file_name'] = $_FILES['userfile']['name'];
                        $data['product'] = $this->input->post('product');
                        $data['product_description'] = $this->input->post('product_description');
                        $data['price'] = $this->input->post('price');
                        $data['inventory'] = $this->input->post('inventory');
                        //echo $data['filename'];
                        //$this->load->view('upload_success', $data);

                        $ret = $this->Products_model->insert_product($data);
                        
                        if( $ret != NULL ){
                            echo $ret;
                        }
                        
                }
        }

        public function get_product(){
            $query = $this->Products_model->get_all_products();

            $data['products'] = $query;

            $this->load->view('logged_header');
            $this->load->view('client_products', $data);
            $this->load->view('footer');
        }
    }
?>