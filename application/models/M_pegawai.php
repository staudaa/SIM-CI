<?php
class M_pegawai extends CI_Model
{
  public function get_data()
  {
    return $this->db->get('pegawai')->result_array();
  }
  public function tambahpegawai()
  {
    $data = [

      "nama_pegawai" => $this->input->post('nama_pegawai', true),
      "tempat_lahir_pegawai" => $this->input->post('tempat_lahir_pegawai', true),
      "tanggal_lahir_pegawai" => $this->input->post('tanggal_lahir_pegawai', true),
      "agama_pegawai" => $this->input->post('agama', true),
      "status_pegawai" => $this->input->post('status', true),
    ];
    $this->db->insert('pegawai', $data);
  }
}
?>