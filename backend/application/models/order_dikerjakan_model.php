<?php
/**
 *
 */
class order_dikerjakan_model extends CI_Model
{
  public function get_order(){
    $arr = $this->db->join('user', 'user.id_user = transaksi.id_user')
                    ->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan')
                    ->join('pakaian', 'pakaian.id_pakaian = transaksi.id_pakaian')
                    ->join('jenis_paket', 'jenis_paket.id_jenis_paket = transaksi.id_jenis_paket')
                    ->join('status', 'status.id_status = transaksi.id_status_t')
                    ->join('laundry', 'laundry.id_laundry = transaksi.id_laundry')
                    ->where('id_status_t = 1')
                    ->order_by('id_transaksi','desc')
                    ->get('transaksi')
                    ->result();
    return $arr;
  }

  public function get_status(){
    $query = $this->db->get('status')->result();
    return $query;
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


}



 ?>
