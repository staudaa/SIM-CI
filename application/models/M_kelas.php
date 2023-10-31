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

  public function getKelasById($id)
  {
    return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
  }

  public function editKelas()
  {
    $data = [
      "id_keahlian" => $this->input->post('id_keahlian', true),
      "kode_kelas" => $this->input->post('kode_kelas', true),
      "nama_kelas" => $this->input->post('nama_kelas', true),
      "wali_kelas" => $this->input->post('wali_kelas', true)
    ];

    $this->db->where('id_kelas', $this->input->post('id_kelas'));
    $this->db->update('kelas', $data);
  }
  public function hapusKelas($Id) 
    {
        $this->db->where('id_kelas', $Id);
        $this->db->delete('kelas');
    }
}



?>