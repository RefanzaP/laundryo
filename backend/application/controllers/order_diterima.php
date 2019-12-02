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

    $this->load->model('order_diterima_model');
  }

    public function index(){
      $data['content_view']="order_diterima/list";
      $this->load->model('order_diterima_model');
      $data['arr']=$this->order_diterima_model->get_order();
      $this->load->model('order_diterima_model');
      $data['data_status']=$this->order_diterima_model->get_status();
      $this->load->view('template', $data, FALSE);
    }

    public function hapus_order($id_transaksi)
  {
    $this->load->model('order_diterima_model');
    $this->order_diterima_model->hapus_order($id_transaksi);
    redirect(base_url('index.php/order_diterima'), 'refresh');
  }

  public function update(){
    $this->form_validation->set_rules('ubah_id_status', 'Status', 'trim|required');
    if ($this->form_validation->run() == TRUE ){
      if ($this->order_diterima_model->update() == TRUE ){
      $this->session->set_flashdata('pesan', 'sukses update');
      redirect(base_url('index.php/order_diterima'), 'refresh');
    } else{

        $this->session->set_flashdata('pesan', 'sukses update');
          redirect(base_url('index.php/order_diterima'), 'refresh');
      }
    }else {
        $this->session->set_flashdata('pesan', validation_errors());
        redirect(base_url('index.php/order_diterima'), 'refresh');
      }
  }

  public function get_detail_order($id_transaksi){
    $data = $this->order_diterima_model->get_data_order($id_transaksi);
    echo json_encode($data);
  }
}


 ?>
