<?php
/**
 *
 */
class order extends CI_Controller
{
  public function index(){
    $this->load->model('order_model');
  }

  public function add() {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->order_model->cari_cart() == TRUE) {
        redirect('transaksi/index');
      } else {
        $this->session->set_flashdata('notif','Data Tidak ditemukan');
        redirect('transaksi/index');
      }
    }
    else {
      redirect('dashboard/index');
    }
  }

}



 ?>
