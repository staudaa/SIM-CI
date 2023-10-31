<?php
class Jurusan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_jurusan');
    $this->load->library('form_validation');
  }
  function index()
  {
    $data['title'] = 'jurusan';
    $data['jurusan'] = $this->M_jurusan->get_data();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('jurusan/jurusan', $data);
    $this->load->view('template/footer', $data);
  }
  public function tambah()
  {
    $data['title'] = 'tambah data siswa';
    $this->form_validation->set_rules('kaproli', 'nama kaproli', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('jurusan/tambah');
      $this->load->view('template/footer');
    } else {
      $this->M_jurusan->tambahJurusan();
      redirect('jurusan');
    }
  }
  public function edit($id)
  {
    $data['title'] = 'edit data siswa';
    $data['jurusan'] = $this->M_jurusan->getJurusanById($id);

    $this->form_validation->set_rules('id_kelas', 'nama kelas', 'required');
    $this->form_validation->set_rules('nama_keahlian', 'nama keahlian', 'required');
    $this->form_validation->set_rules('kaproli', 'nama kaproli', 'required');
    $this->form_validation->set_rules('deskripsi', 'nama deskripsi', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('jurusan/edit', $data);
      $this->load->view('template/footer');
    } else {
      $this->M_jurusan->editJurusan();
      redirect('jurusan');
    }
  }
  public function hapus($id)
  {
    $this->M_jurusan->hapusJurusan($id);
    redirect('jurusan');
  }
  public function detail($id)
  {
    $data['title'] = 'detail jurusan';
    $data['jurusan'] = $this->M_jurusan->getJurusanById($id);

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('jurusan/detail');
    $this->load->view('template/footer');
  }
}
