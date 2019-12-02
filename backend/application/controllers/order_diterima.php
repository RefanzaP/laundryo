<?php
/**
 *
 */
class order_diterima extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }

    $this->load->model('order_diterima');
  }

  

}


 ?>
