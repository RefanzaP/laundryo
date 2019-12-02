<?php
/**
 *
 */
class pakaian extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('pakaian_model');
  }

  public function index(){
        $data['content_view']="pakaian/list";
        $this->load->model('pakaian_model');
        $data['arr']=$this->pakaian_model->get_pakaian();
        $this->load->model('level_model');
        $data['data_jenis']=$this->pakaian_model->show_paket();
        $this->load->view('template', $data, FALSE);

  }

  public function get_detail_pakaian($id_pakaian){
    $data = $this->pakaian_model->get_data_pakaian($id_pakaian);
    echo json_encode($data);
  }

  public function update(){
    $this->form_validation->set_rules('id_jenis_paket', 'Jenis Paket', 'trim|required');
    $this->form_validation->set_rules('jenis_pakaian', 'Jenis Pakaian', 'trim|required');
    $this->form_validation->set_rules('harga_pakaian', 'Harga', 'trim|required|numeric');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

          if ($this->form_validation->run() == TRUE ){
            if ($this->pakaian_model->update() == TRUE ){
            $this->session->set_flashdata('pesan', 'sukses update');
            redirect(base_url('index.php/pakaian'), 'refresh');
          } else{

              $this->session->set_flashdata('pesan', 'sukses update');
                redirect(base_url('index.php/pakaian'), 'refresh');
            }
          }else {
              $this->session->set_flashdata('pesan', validation_errors());
              redirect(base_url('index.php/pakaian'), 'refresh');
            }
  }
  public function add(){
          $this->form_validation->set_rules('id_jenis_paket', 'Jenis Paket', 'trim|required');
          $this->form_validation->set_rules('jenis_pakaian', 'Jenis Pakaian', 'trim|required');
          $this->form_validation->set_rules('harga_pakaian', 'Harga', 'trim|required|numeric');
          $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

      if ($this->form_validation->run() == TRUE )
      {
          $this->load->model('pakaian_model', 'bar');
          $masuk=$this->bar->add();
          if($masuk==TRUE){
              $this->session->set_flashdata('pesan', 'sukses');
          } else{
              $this->session->set_flashdata('pesan', 'gagal');
          }
          redirect(base_url('index.php/pakaian'), 'refresh');
      }
      else{
          $this->session->set_flashdata('pesan', validation_errors());
          redirect(base_url('index.php/pakaian'), 'refresh');
      }
}

  public function hapus_pakaian($id_pakaian){
    $this->load->model('pakaian_model');
    $this->pakaian_model->hapus_pakaian($id_pakaian);
    redirect(base_url('index.php/pakaian'), 'refresh');
  }
}


 ?>
