<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Users_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function get_users(){
            $this->db->select('*');
            $this->db->from('Customers');
            $this->db->join('Accounts' , 'Accounts.customer_id = Customers.customer_id' , 'left');

            $query = $this->db->get();

            return ($query->num_rows() > 0) ? $query->result(): NULL;
        }

        public function update_users($data){
            // $query = 
            // $this->db->set
        }
    }
?>