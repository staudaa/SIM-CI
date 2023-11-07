<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_m');
	}
	public function index()
	{
		$data['title'] = 'Data Siswa';
		$data['row'] = $this->data_m->get();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dataa/data', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$dt = new stdClass();
		$dt->id_data = null;
		$dt->id_kelas = null;
		// $query_kelas = $this->m_kelas->get();
		// $kelas[null] = '- Pilih -';
		// foreach ($query_kelas->result() as $kls) {
		// 	$kelas[$kls->id_kelas] = $kls->nama_kelas;
		// }

		$dt->id_keahlian = null;
		$dt->nama_siswa = null;
		$dt->jenis_kelamin = null;
		$dt->nomer_induk = null;
		$dt->nik = null;
		$dt->tempat_lahir = null;
		$dt->tanggal_lahir = null;
		$dt->agama = null;
		$dt->kewarganegaraan = null;
		$dt->no_hp = null;
		$dt->alamat = null;
		$dt->rt_rw = null;
		$dt->dusun = null;
		$dt->kelurahan = null;
		$dt->kecamatan = null;
		$dt->kabupaten = null;
		$dt->provinsi = null;
		$dt->kode_pos = null;
		$dt->nama_ayah = null;
		$dt->tempat_lahir_ayah = null;
		$dt->tanggal_lahir_ayah = null;
		$dt->pendidikan_terakhir_ayah = null;
		$dt->pekerjaan_ayah = null;
		$dt->penghasilan_bulanan_ayah = null;
		$dt->no_hp_ayah = null;
		$dt->agama_ayah = null;
		$dt->nama_ibu = null;
		$dt->tempat_lahir_ibu = null;
		$dt->tanggal_lahir_ibu = null;
		$dt->pendidikan_terakhir_ibu = null;
		$dt->pekerjaan_ibu = null;
		$dt->penghasilan_bulanan_ibu = null;
		$dt->no_hp_ibu = null;
		$dt->agama_ibu = null;
		$dt->nama_wali = null;
		$dt->tempat_lahir_wali = null;
		$dt->tanggal_lahir_wali = null;
		$dt->pendidikan_terakhir_wali = null;
		$dt->pekerjaan_wali = null;
		$dt->penghasilan_bulanan_wali = null;
		$dt->no_hp_wali = null;
		$dt->agama_wali = null;
		$dt->foto = null;
		$dt->ktp_ayah = null;
		$dt->ktp_ibu = null;
		$dt->ktp_wali = null;
		$dt->kk_siswa = null;
		$dt->kk_wali = null;
		$data = array(
			'page' => 'add',
			'row' => $dt,
			// 'kelas' => $kelas, 'selectedkelas' => null,
		);

		$data['title'] = 'Data Form';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dataa/data_form', $data);
		$this->load->view('template/footer');
	}

	public function edit($id)
	{
		$query = $this->data_m->get($id);
		if ($query->num_rows() > 0) {
			$dt = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $dt
			);

			$data['title'] = 'Data';

			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('dataa/data_form', $data);
			$this->load->view('template/footer');
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "window.location='" . site_url('data') . "';";
		}
	}

	public function process()
	{
		$post = $this->input->post();
		if (isset($_POST['add'])) {
			$this->data_m->add($post);
		} else if (isset($_POST['edit'])) {
			$this->data_m->edit($post);
		}

		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
		echo "<script>window.location='" . site_url('data') . "';</script>";
	}

	public function del($id)
	{
		$this->data_m->del($id);
		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='" . site_url('data') . "';</script>";
	}
	public function detail($id)
	{
		$data['title'] = 'detail data';
		$data['row'] = $this->data_m->detail($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dataa/detail', $data);
		$this->load->view('template/footer');

	}
}
