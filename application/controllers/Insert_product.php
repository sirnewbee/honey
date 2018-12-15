<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        var_dump("in here");
        $this->load->model('Guid_generator');
    }

    public function new_product(){
        
        echo $this->Guid_generator->getGuid();
    }
}

?>