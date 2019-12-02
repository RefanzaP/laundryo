<?php
/**
 *
 */
class order extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }

    $this->load->model('order_model');
  }

  public function index($offset=0){
    $data['content_view']="order/list";
    $this->load->model('order_model');
    $data['arr']=$this->order_model->get_order();
    $this->load->model('order_model');
    $data['data_status']=$this->order_model->get_status();
    $this->load->model('order_model');
    $data['data_pelanggan']=$this->order_model->get_pelanggan();


		    $data_post = $this->db->get('transaksi');
        $config['total_rows'] = $data_post->num_rows();
        $config['base_url']= base_url(). 'index.php/order/index';
        $config['per_page']=5;

        // Konfigurasi Boostrap
        $config['full_tag_open']="<ul class='pagination pagination-sm' style='position:relative; top:-25px'>";
        $config['full_tag_close']="</ul>";
        $config['num_tag_open']="<li>";
        $config['num_tag_close']="</li>";
        $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']="<span class='sr-only'></span></a></li>";
        $config['next_tag_open']="<li>";
        $config['next_tag_close']="</li>";
        $config['prev_tag_open']="<li>";
        $config['prev_tag_close']="</li>";
        $config['first_tag_open']="<li>";
        $config['first_tag_close']="</li>";
        $config['last_tag_open']="<li>";
        $config['last_tag_close']="</li>";

        $this->pagination->initialize($config);
        $data['halaman']=$this->pagination->create_links();
        $data['offset']=$offset;
        $data['data'] = $this->order_model->ambil_data($config['per_page'],$data['offset']);

    $this->load->view('template', $data, FALSE);
  }

  public function hapus_order($id_transaksi)
{
  $this->load->model('order_model');
  $this->order_model->hapus_order($id_transaksi);
  redirect(base_url('index.php/order'), 'refresh');
}

  public function add(){
    $this->form_validation->set_rules('id_pelanggan', 'Pelanggan', 'trim|required');
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

  public function update(){
    $this->form_validation->set_rules('ubah_id_status', 'Status', 'trim|required');
    if ($this->form_validation->run() == TRUE ){
      if ($this->order_model->update() == TRUE ){
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

  public function get_detail_order($id_transaksi){
    $data = $this->order_model->get_data_order($id_transaksi);
    echo json_encode($data);
  }

}



 ?>
