<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Products_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function insert_product($data){
            // echo $data['file_name'];
            // echo $data['product'];
            // echo $data['inventory'];
            // echo $data['price'];
            // echo $data['product_description'];
            $var = NULL;
            if($this->db->insert('Products' , $data)){
                $var = $this->db->insert_id();
                echo "Success";
            }

            return $var;
        }

        public function get_all_products(){
            $sql = "SELECT * FROM Products";
            $query = $this->db->query($sql);
            
            return ($query->num_rows() > 0) ? $query->result(): NULL;
        }
    }
?>