<?php
class M_data extends CI_Model
{
  public function get_data()
  {
    return $this->db->get('data')->result_array();
  }
  public function tambahData()
  {
    $data = [
      'id_kelas' => $this->input->post('id_kelas'),
      'id_keahlian' => $this->input->post('id_keahlian'),
      'nama_siswa' => $this->input->post('nama_siswa'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'nomer_induk' => $this->input->post('nomer_induk'),
      'nik' => $this->input->post('nik'),
      'tempat_lahir' => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'agama' => $this->input->post('agama'),
      'kewarganegaraan' => $this->input->post('kewarganegaraan'),
      'no_hp' => $this->input->post('no_hp'),
      'alamat' => $this->input->post('alamat'),
      'rt_rw' => $this->input->post('rt_rw'),
      'dusun' => $this->input->post('dusun'),
      'kelurahan' => $this->input->post('kelurahan'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabupaten' => $this->input->post('kabupaten'),
      'provinsi' => $this->input->post('provinsi'),
      'kode_pos' => $this->input->post('kode_pos'),
      'nama_ayah' => $this->input->post('nama_ayah'),
      'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
      'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
      'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah'),
      'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
      'penghasilan_bulanan_ayah' => $this->input->post('penghasilan_bulanan_ayah'),
      'no_hp_ayah' => $this->input->post('no_hp_ayah'),
      'agama_ayah' => $this->input->post('agama_ayah'),
      'nama_ibu' => $this->input->post('nama_ibu'),
      'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
      'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
      'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu'),
      'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
      'penghasilan_bulanan_ibu' => $this->input->post('penghasilan_bulanan_ibu'),
      'no_hp_ibu' => $this->input->post('no_hp_ibu'),
      'agama_ibu' => $this->input->post('agama_ibu'),
      'nama_wali' => $this->input->post('nama_wali'),
      'tempat_lahir_wali' => $this->input->post('tempat_lahir_wali'),
      'tanggal_lahir_wali' => $this->input->post('tanggal_lahir_wali'),
      'pendidikan_terakhir_wali' => $this->input->post('pendidikan_terakhir_wali'),
      'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
      'penghasilan_bulanan_wali' => $this->input->post('penghasilan_bulanan_wali'),
      'no_hp_wali' => $this->input->post('no_hp_wali'),
      'agama_wali' => $this->input->post('agama_wali'),
      'foto' => $this->input->post('foto'),
      'ktp_ayah' => $this->input->post('ktp_ayah'),
      'ktp_ibu' => $this->input->post('ktp_ibu'),
      'ktp_wali' => $this->input->post('ktp_wali'),
      'kk_siswa' => $this->input->post('kk_siswa'),
      'kk_wali' => $this->input->post('kk_wali'),

    ];
    $this->db->insert('data', $data);
  }

}

?>