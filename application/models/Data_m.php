<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->select('data.*, kelas.nama_kelas as nama_kelas, konsentrasi_keahlian.nama_keahlian as nama_keahlian');
		$this->db->from('data');
		$this->db->join('kelas', 'kelas.id_kelas = data.id_kelas');
		$this->db->join('konsentrasi_keahlian', 'konsentrasi_keahlian.id_keahlian = data.id_keahlian');
		if ($id != null) {
			$this->db->where('id_data', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function add($post)
	{
		$params = [
			'id_kelas' => $post['id_kelas'],
			'id_keahlian' => $post['id_keahlian'],
			'nama_siswa' => $post['nama_siswa'],
			'jenis_kelamin' => $post['jenis_kelamin'],
			'nomer_induk' => $post['nomer_induk'],
			'nik' => $post['nik'],
			'tempat_lahir' => $post['tempat_lahir'],
			'tanggal_lahir' => $post['tanggal_lahir'],
			'agama' => $post['agama'],
			'kewarganegaraan' => $post['kewarganegaraan'],
			'no_hp' => $post['no_hp'],
			'alamat' => $post['alamat'],
			'rt_rw' => $post['rt_rw'],
			'dusun' => $post['dusun'],
			'kelurahan' => $post['kelurahan'],
			'kecamatan' => $post['kecamatan'],
			'kabupaten' => $post['kabupaten'],
			'provinsi' => $post['provinsi'],
			'kode_pos' => $post['kode_pos'],
			'nama_ayah' => $post['nama_ayah'],
			'tempat_lahir_ayah' => $post['tempat_lahir_ayah'],
			'tanggal_lahir_ayah' => $post['tanggal_lahir_ayah'],
			'pendidikan_terakhir_ayah' => $post['pendidikan_ayah'],
			'pekerjaan_ayah' => $post['pekerjaan_ayah'],
			'penghasilan_bulanan_ayah' => $post['penghasilan_ayah'],
			'no_hp_ayah' => $post['no_hp_ayah'],
			'agama_ayah' => $post['agama_ayah'],
			'nama_ibu' => $post['nama_ibu'],
			'tempat_lahir_ibu' => $post['tempat_lahir_ibu'],
			'tanggal_lahir_ibu' => $post['tanggal_lahir_ibu'],
			'pendidikan_terakhir_ibu' => $post['pendidikan_ibu'],
			'pekerjaan_ibu' => $post['pekerjaan_ibu'],
			'penghasilan_bulanan_ibu' => $post['penghasilan_ibu'],
			'no_hp_ibu' => $post['no_hp_ibu'],
			'agama_ibu' => $post['agama_ibu'],
			'nama_wali' => $post['nama_wali'],
			'tempat_lahir_wali' => $post['tempat_lahir_wali'],
			'tanggal_lahir_wali' => $post['tanggal_lahir_wali'],
			'pendidikan_terakhir_wali' => $post['pendidikan_wali'],
			'pekerjaan_wali' => $post['pekerjaan_wali'],
			'penghasilan_bulanan_wali' => $post['penghasilan_wali'],
			'no_hp_wali' => $post['no_hp_wali'],
			'agama_wali' => $post['agama_wali'],
			'foto' => $post['foto'],
			'ktp_ayah' => $post['ktp_ayah'],
			'ktp_ibu' => $post['kode_pos'],
			'ktp_wali' => $post['ktp_wali'],
			'kk_siswa' => $post['kk_siswa'],
			'kk_wali' => $post['kk_wali'],
		];
		$this->db->insert('data', $params);
	}

	public function edit($post)
	{
		$params = [
			'id_kelas' => $post['id_kelas'],
			'id_keahlian' => $post['id_keahlian'],
			'nama_siswa' => $post['nama_siswa'],
			'jenis_kelamin' => $post['jenis_kelamin'],
			'nomer_induk' => $post['nomer_induk'],
			'nik' => $post['nik'],
			'tempat_lahir' => $post['tempat_lahir'],
			'tanggal_lahir' => $post['tanggal_lahir'],
			'agama' => $post['agama'],
			'kewarganegaraan' => $post['kewarganegaraan'],
			'no_hp' => $post['no_hp'],
			'alamat' => $post['alamat'],
			'rt_rw' => $post['rt_rw'],
			'dusun' => $post['dusun'],
			'kelurahan' => $post['kelurahan'],
			'kecamatan' => $post['kecamatan'],
			'kabupaten' => $post['kabupaten'],
			'provinsi' => $post['provinsi'],
			'kode_pos' => $post['kode_pos'],
			'nama_ayah' => $post['nama_ayah'],
			'tempat_lahir_ayah' => $post['tempat_lahir_ayah'],
			'tanggal_lahir_ayah' => $post['tanggal_lahir_ayah'],
			'pendidikan_terakhir_ayah' => $post['pendidikan_ayah'],
			'pekerjaan_ayah' => $post['pekerjaan_ayah'],
			'penghasilan_bulanan_ayah' => $post['penghasilan_ayah'],
			'no_hp_ayah' => $post['no_hp_ayah'],
			'agama_ayah' => $post['agama_ayah'],
			'nama_ibu' => $post['nama_ibu'],
			'tempat_lahir_ibu' => $post['tempat_lahir_ibu'],
			'tanggal_lahir_ibu' => $post['tanggal_lahir_ibu'],
			'pendidikan_terakhir_ibu' => $post['pendidikan_ibu'],
			'pekerjaan_ibu' => $post['pekerjaan_ibu'],
			'penghasilan_bulanan_ibu' => $post['penghasilan_ibu'],
			'no_hp_ibu' => $post['no_hp_ibu'],
			'agama_ibu' => $post['agama_ibu'],
			'nama_wali' => $post['nama_wali'],
			'tempat_lahir_wali' => $post['tempat_lahir_wali'],
			'tanggal_lahir_wali' => $post['tanggal_lahir_wali'],
			'pendidikan_terakhir_wali' => $post['pendidikan_wali'],
			'pekerjaan_wali' => $post['pekerjaan_wali'],
			'penghasilan_bulanan_wali' => $post['penghasilan_wali'],
			'no_hp_wali' => $post['no_hp_wali'],
			'agama_wali' => $post['agama_wali'],
			'foto' => $post['foto'],
			'ktp_ayah' => $post['ktp_ayah'],
			'ktp_ibu' => $post['kode_pos'],
			'ktp_wali' => $post['ktp_wali'],
			'kk_siswa' => $post['kk_siswa'],
			'kk_wali' => $post['kk_wali'],
			'updated' => date('Y-m-d H:i:s'),
		];
		$this->db->where('id_data', $post['id']);
		$this->db->update('data', $params);
	}
	public function del($id)
	{
		$this->db->where('id_data', $id);
		$this->db->delete('data');
	}

	function data()
	{
		$this->db->select('*');
		$this->db->from('data');
		return $this->db->get()->num_rows();
	}

	public function getSiswaCowo()
	{
		$this->db->where('jenis_kelamin', 'Laki-laki');
		$this->db->from('data');
		return $this->db->count_all_results();
	}

	public function getSiswaCewe()
	{
		$this->db->where('jenis_kelamin', 'Perempuan');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	public function detail($id_data)
	{
		return $this->db->get_where('data', ['id_data' => $id_data])->row_array();
	}
}
