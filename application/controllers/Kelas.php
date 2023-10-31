<?php
class Kelas extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_kelas');
    $this->load->library('form_validation');
  }
  function index()
  {
    $data['title'] = 'kelas';
    $data['kelas'] = $this->M_kelas->get_data();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('kelas/kelas', $data);
    $this->load->view('template/footer', $data);
  }
  public function tambah()
  {
    $data['title'] = 'tambah data kelas';
    $this->form_validation->set_rules('wali', 'wali kelas', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar', $data);
      $this->load->view('kelas/tambah', $data);
      $this->load->view('template/footer');
    } else {
      $this->M_kelas->tambahkelas();
      $this->session->set_flashdata('flash', 'ditambahkan');
      redirect('kelas');
    }
  }

  public function edit($id)
  {
    $data['title'] = 'edit data siswa';
    $data['kelas'] = $this->M_kelas->getKelasById($id);

    $this->form_validation->set_rules('id_keahlian', 'nama keahlian', 'required');
    $this->form_validation->set_rules('kode_kelas', 'kode kelas', 'required');
    $this->form_validation->set_rules('nama_kelas', 'nama kelas', 'required');
    $this->form_validation->set_rules('wali_kelas', 'nama  wali kelas', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('kelas/edit', $data);
      $this->load->view('template/footer');
    } else {
      $this->M_kelas->editkelas();
      redirect('kelas');
    }
  }

  public function hapus($id)
  {
    $this->M_kelas->hapusKelas($id);
    redirect('kelas');
  }
}
?>