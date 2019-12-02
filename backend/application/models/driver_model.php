<?php
/**
 *
 */
class driver_model extends CI_Model
{public function get_user(){
  $arr= $this->db->where('id_level = 2')->get('user')->result();
  return $arr;
}

public function show()
{
  $arr= $this->db->where('id_level = 2')->get('level')->result();
  return $arr;
}

public function ambil_data($limit,$start){

    return $this->db->limit($limit,$start)
                    ->get('user')
                    ->result();
    }

    public function hapus_user($id_user)
    {
      $this->db->where('id_user', $id_user);
      return $this->db->delete('user');
    }


          public function get_data_user($id_user)
          {
            return $this->db->where('id_user', $id_user)
                            ->get('user')
                            ->row();

          }

    public function add(){
      $data_topik=array(
          'nama' => $this->input->post('nama'),
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password'),
          'telepon' => $this->input->post('telepon'),
          'alamat' => $this->input->post('alamat'),
          'id_level'=>$this->input->post('id_level'),
      );
    $ql_masuk=$this->db->insert('user', $data_topik);
    return $ql_masuk;
    }


    public function update()
    {
      $data = array(
        'nama'     => $this->input->post('ubah_nama'),
        'username' => $this->input->post('ubah_username'),
        'telepon'  => $this->input->post('ubah_telepon'),
        'alamat'   => $this->input->post('ubah_alamat'),
          );

          return $this->db->where('id_user', $this->input->post('ubah_id_user'))
                          ->update('user', $data);
      if ($this->db->affected_rows() > 0) {
        return TRUE;
      } else {
        return FALSE;
      }
  }
}


 ?>
