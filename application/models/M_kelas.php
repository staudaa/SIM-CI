<?php
class M_kelas extends CI_Model
{
  public function get_data()
  {
    return $this->db->get('kelas')->result_array();
  }
  public function tambahkelas()
  {
    $data = [

      "id_keahlian" => $this->input->post('id_keahlian', true),
      "kode_kelas" => $this->input->post('kode', true),
      "nama_kelas" => $this->input->post('nama_kelas', true),
      "wali_kelas" => $this->input->post('wali', true),
    ];
    $this->db->insert('kelas', $data);
  }
}



?>