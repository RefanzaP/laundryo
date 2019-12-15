<?php

class cart extends CI_Controller

  {

    public function __construct(){
      parent::__construct();
      $this->load->model('cart_model');
    }

    public function index(){
      $this->load->model('cart_model');
      $data['arr']=$this->cart_model->get_transaksi();
      $this->load->view('v_cart',$data);
  }

  public function add(){
    $this->form_validation->set_rules('id_jenis_paket', 'Paket', 'trim|required');
    $this->form_validation->set_rules('id_pakaian', 'Pakaian', 'trim|required');
    $this->form_validation->set_rules('id_laundry', 'laundry', 'trim|required');
    $this->form_validation->set_rules('qty', 'Jumlah', 'trim|required|numeric');

          if ($this->form_validation->run() == TRUE ){
            if ($this->cart_model->add() == TRUE ){
            $this->session->set_flashdata('pesan', 'sukses update');
            redirect(base_url('index.php/cart'), 'refresh');
          } else{

              $this->session->set_flashdata('pesan', 'sukses update');
                redirect(base_url('index.php/cart'), 'refresh');
            }
          }else {
              $this->session->set_flashdata('pesan', validation_errors());
              redirect(base_url('index.php/cart'), 'refresh');
            }

  }



}


 ?>
