<?php
/**
 *
 */
class order_selesai extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('order_selesai_model');
  }
  public function index(){

        $data['content_view']="order_selesai/list";
        $this->load->model('order_selesai_model');
        $data['arr']=$this->order_selesai_model->get_selesai();
        $this->load->model('order_model');
        $data['data_status']=$this->order_model->get_status();
        $this->load->view('template', $data, FALSE);
  }

  public function hapus_order($id_transaksi)
{
  $this->load->model('order_selesai_model');
  $this->order_selesai_model->hapus_order($id_transaksi);
  redirect(base_url('index.php/order_selesai'), 'refresh');
}

public function update(){
  $this->form_validation->set_rules('ubah_id_status', 'Status', 'trim|required');
  if ($this->form_validation->run() == TRUE ){
    if ($this->order_selesai_model->update() == TRUE ){
    $this->session->set_flashdata('pesan', 'sukses update');
    redirect(base_url('index.php/order_selesai'), 'refresh');
  } else{

      $this->session->set_flashdata('pesan', 'sukses update');
        redirect(base_url('index.php/order_selesai'), 'refresh');
    }
  }else {
      $this->session->set_flashdata('pesan', validation_errors());
      redirect(base_url('index.php/order_selesai'), 'refresh');
    }
}


}


 ?>
