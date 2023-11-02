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

  public function getPegawaiById($id)
  {
    return $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();
  }

  public function editPegawai()
  {
    $data = [
      "nama_pegawai" => $this->input->post('nama_pegawai', true),
      "tempat_lahir_pegawai" => $this->input->post('tempat_lahir_pegawai', true),
      "tanggal_lahir_pegawai" => $this->input->post('tanggal_lahir_pegawai', true),
      "agama_pegawai" => $this->input->post('agama_pegawai', true),
      "status_pegawai" => $this->input->post('status_pegawai', true)
    ];

    $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
    $this->db->update('pegawai', $data);
  }

  public function hapusPegawai($id)
  {
    $this->db->where('id_pegawai', $id);
    $this->db->delete('pegawai');
  }

  function pegawai()
  {
    $this->db->select('*');
    $this->db->from('pegawai');
    return $this->db->get()->num_rows();
  }
}
