<?php
/**
 *
 */
class pakaian_model extends CI_Model
{
  public function get_pakaian(){
    $arr = $this->db->join('jenis_paket', 'jenis_paket.id_jenis_paket = pakaian.id_jenis_paket')
                    ->get('pakaian')
                    ->result();
    return $arr;
  }

  public function show_paket(){
    $arr= $this->db->get('jenis_paket')->result();
    return $arr;
  }
  public function add(){
    $data_topik=array(
        'id_jenis_paket' => $this->input->post('id_jenis_paket'),
        'jenis_pakaian' => $this->input->post('jenis_pakaian'),
        'harga_pakaian' => $this->input->post('harga_pakaian'),
        'keterangan' => $this->input->post('keterangan'),

    );
  $ql_masuk=$this->db->insert('pakaian', $data_topik);
  return $ql_masuk;
  }

  public function hapus_pakaian($id_pakaian){
    $this->db->where('id_pakaian', $id_pakaian);
    return $this->db->delete('pakaian');
  }
}



 ?>
