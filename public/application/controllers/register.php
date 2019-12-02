<?php
/**
 *
 */
class register extends CI_Controller
{

  public function __construct(){
    parent::__construct();
  }

  public function add(){
          $this->form_validation->set_rules('nama_user', 'nama', 'trim|required');
          $this->form_validation->set_rules('username', 'username', 'trim|required');
          $this->form_validation->set_rules('password', 'password', 'trim|required');
          $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
                $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
      if ($this->form_validation->run() == TRUE )
      {
          $this->load->model('register_model', 'bar');
          $masuk=$this->bar->add();
          if($masuk==TRUE){
              $this->session->set_flashdata('pesan', 'sukses');
          } else{
              $this->session->set_flashdata('pesan', 'gagal');
          }
          redirect(base_url('index.php/dashboard'), 'refresh');
      }
      else{
          $this->session->set_flashdata('pesan', validation_errors());
          redirect(base_url('index.php/dashboard'), 'refresh');
      }
  }
}


 ?>
