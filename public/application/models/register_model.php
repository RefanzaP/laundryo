<?php
/**
 *
 */
class register_model extends CI_Model
{

  public function add(){
    $data_topik=array(
        'nama_user' => $this->input->post('nama_user'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'telepon' => $this->input->post('telepon'),
        'alamat' => $this->input->post('alamat'),
    );
  $ql_masuk=$this->db->insert('pelanggan', $data_topik);
  return $ql_masuk;
  }
}


 ?>
