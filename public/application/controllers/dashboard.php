<?php

class dashboard extends CI_Controller

  {

    public function __construct(){
      parent::__construct();
      $this->load->model('cart_model');
      }

    public function index(){
      $this->load->model('cart_model');
      $data['data_pakaian'] = $this->cart_model->get_pakaian();
      $this->load->model('cart_model');
      $data['data_paket'] = $this->cart_model->get_paket();
      $this->load->model('cart_model');
      $data['data_laundry'] = $this->cart_model->get_laundry();
    $this->load->view('template',$data);
  }

  public function add(){
    $this->form_validation->set_rules('id_jenis_pakaian', 'Pakaian', 'trim|required');
      $this->form_validation->set_rules('id_jenis_paket', 'Jenis Paket', 'trim|required');
    $this->form_validation->set_rules('qty', 'Jumlah', 'trim|required|numeric');

          if ($this->form_validation->run() == TRUE ){
            if ($this->order_model->add() == TRUE ){
            $this->session->set_flashdata('pesan', 'sukses update');
            redirect(base_url('index.php/order'), 'refresh');
          } else{

              $this->session->set_flashdata('pesan', 'sukses update');
                redirect(base_url('index.php/order'), 'refresh');
            }
          }else {
              $this->session->set_flashdata('pesan', validation_errors());
              redirect(base_url('index.php/order'), 'refresh');
            }
  }


  }


 ?>
