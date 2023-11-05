<?php
class Dashboard extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Data_m');
    $this->load->model('M_jurusan');
    $this->load->model('M_kelas');
    $this->load->model('M_pegawai');
  }

  public function index(){
    $data['title']= 'Dashboard';

    $data['row'] = $this->Data_m->data();
    $data['jurusan'] = $this->M_jurusan->jurusan();
    $data['kelas'] = $this->M_kelas->kelas();
    $data['pegawai'] = $this->M_pegawai->pegawai();

		$data["laki"] = $this->Data_m->getSiswaCowo();
		$data["cewe"] = $this->Data_m->getSiswaCewe();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('dashboard');
    $this->load->view('template/footer');
  }
}
