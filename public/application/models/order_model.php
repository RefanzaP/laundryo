<?php
/**
 *
 */
class order_model extends CI_Model
{

  public function get_jenis(){
    $query = $this->db->get('jenis_paket')->result();
    return $query;
  }

  public function get_pakaian(){
    $query = $this->db->get('pakaian')->result();
    return $query;
  }

  public function add(){
      $now = date("Y-m-d H:i:s");
    $data_topik=array(
        'tanggal_pesan'    => $now,
        'id_jenis_pakaian' =>$this->input->post('id_jenis_pakaian'),
        'id_jenis_paket' =>$this->input->post('id_jenis_paket'),
        'qty'           => $this->input->post('qty'),
        'id_pelanggan'  => $_SESSION['id_pelanggan'],
        'id_status_t'   => '4',
    );
  $ql_masuk=$this->db->insert('transaksi', $data_topik);
  return $ql_masuk;
  }

}



 ?>
