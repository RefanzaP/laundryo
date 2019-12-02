<?php

class detail extends CI_Controller

  {

    public function __construct(){
      parent::__construct();
      
    }

    public function index(){
    $this->load->view('v_detail_order');
  }

  }


 ?>
