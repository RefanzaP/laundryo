<?php
/**
 *
 */
class order_model extends CI_Model
{
  public function get_order(){
    $arr = $this->db->join('user', 'user.id_user = transaksi.id_user')
                    ->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan')
                    ->join('pakaian', 'pakaian.id_pakaian = transaksi.id_pakaian')
                    ->join('jenis_paket', 'jenis_paket.id_jenis_paket = transaksi.id_jenis_paket')
                    ->join('status', 'status.id_status = transaksi.id_status_t')
                    ->join('laundry', 'laundry.id_laundry = transaksi.id_laundry')
                    ->where('id_status_t = 4')
                    ->order_by('id_transaksi','desc')
                    ->get('transaksi')
                    ->result();
    return $arr;
  }

  public function get_pakaian(){
    $query = $this->db->get('pakaian')->result();
    return $query;
  }
    public function get_laundry(){
    $query = $this->db->get('laundry')->result();
    return $query;
  }

  public function get_pelanggan(){
    $query = $this->db->get('pelanggan')->result();
    return $query;
  }

  public function get_jenis(){

      $query = $this->db->get('jenis_paket')->result();
      return $query;

  }

  public function get_status(){

      $query = $this->db->get('status')->result();
      return $query;

  }
  function ambil_data($perpage,$offset)
    {

      return $this->db->get('transaksi', $perpage,$offset)->result();

    }

  public function hapus_order($id_transaksi = '')
  {
    $this->db->where('id_transaksi', $id_transaksi);
    return $this->db->delete('transaksi');
  }

  public function update()
  {
    $data = array(
      'id_status_t' => $this->input->post('ubah_id_status'),
      'id_user' => $_SESSION['id_user'],
        );
        return $this->db->where('id_transaksi', $this->input->post('ubah_id_transaksi'))
                        ->update('transaksi', $data);
    if ($this->db->affected_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
}

  public function get_data_order($id_transaksi){
    return $this->db->where('id_transaksi', $id_transaksi)
                    ->get('transaksi')
                    ->row();
  }

  public function add(){
      $now = date("Y-m-d H:i:s");
    $data_topik=array(
        'tanggal_pesan' => $now,
        'id_pelanggan'  => $this->input->post('id_pelanggan'),
        'id_jenis_paket'  => $this->input->post('id_jenis_paket'),
        'id_laundry'  => $this->input->post('id_laundry'),
        'id_pakaian'  => $this->input->post('id_pakaian'),
        'qty'           => $this->input->post('qty'),
        'id_user'       => $_SESSION['id_user'],
        'id_status_t'   => '4',
    );
  $ql_masuk=$this->db->insert('transaksi', $data_topik);
  return $ql_masuk;
  }

}


 ?>
