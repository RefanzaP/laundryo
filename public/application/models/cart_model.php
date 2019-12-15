<?php
/**
 *
 */
class cart_model extends CI_Model
{

  public function get_paket(){
    $query = $this->db->get('jenis_paket')->result();
    return $query;
  }

  public function get_pakaian(){
    $query = $this->db->get('pakaian')->result();
    return $query;
  }

  public function get_laundry(){
    $query = $this->db->get('laundry')->result();
    return $query;
  }

  public function get_transaksi(){
    $arr = $this->db->join('user', 'user.id_user = transaksi.id_user')
                    ->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan')
                    ->join('pakaian', 'pakaian.id_pakaian = transaksi.id_pakaian')
                    ->join('jenis_paket', 'jenis_paket.id_jenis_paket = transaksi.id_jenis_paket')
                    ->join('status', 'status.id_status = transaksi.id_status_t')
                    ->join('laundry', 'laundry.id_laundry = transaksi.id_laundry')
                    ->where('transaksi.id_pelanggan',$this->session->userdata['id_pelanggan'])
                    ->order_by('id_transaksi','desc')
                    ->get('transaksi')
                    ->result();
    return $arr;
  }

    public function add(){
    $now = date("Y-m-d H:i:s");
    $data_topik=array(
      'tanggal_pesan' => $now,
      'id_pelanggan'  =>  $_SESSION['id_pelanggan'],
      'id_jenis_paket'  => $this->input->post('id_jenis_paket'),
      'id_laundry'  => $this->input->post('id_laundry'),
      'id_pakaian'  => $this->input->post('id_pakaian'),
      'qty'           => $this->input->post('qty'),
      'id_status_t'   => '4',
    );
  $ql_masuk=$this->db->insert('transaksi', $data_topik);
  return $ql_masuk;
  }
}


 ?>
