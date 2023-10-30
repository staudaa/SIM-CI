<?php
class M_jurusan extends CI_Model
{

  public function get_data()
  {
    return $this->db->get('konsentrasi_keahlian')->result_array();
  }
  public function tambahJurusan(){
    $data = [
      'id_kelas'=> $this->input->post('id_kelas',true),
      'nama_keahlian'=> $this->input->post('nama_keahlian', true),
      'kaproli'=> $this->input->post('kaproli', true),
      'deskripsi'=> $this->input->post('deskripsi', true),
    ];
    $this->db->insert('konsentrasi_keahlian', $data);
  }
}
?>