<?php
class Pegawai extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pegawai');
    $this->load->library('form_validation');
  }
  function index()
  {
    $data['title'] = 'pegawai';
    $data['pegawai'] = $this->M_pegawai->get_data();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('pegawai/pegawai', $data);
    $this->load->view('template/footer', $data);
  }
  public function tambah()
  {
    $data['title'] = 'tambah data pegawai';
 
    $this->form_validation->set_rules('status', 'status pegawai', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar', $data);
      $this->load->view('pegawai/tambah', $data);
      $this->load->view('template/footer');
    } else {
      $this->M_pegawai->tambahpegawai();
      $this->session->set_flashdata('flash', 'ditambahkan');
      redirect('pegawai');
    }
  }

  public function edit($id)
  {
    $data['title'] = 'edit data pegawai';
    $data['pegawai'] = $this->M_pegawai->getPegawaiById($id);
 
    $this->form_validation->set_rules('nama_pegawai', 'status pegawai', 'required');
    $this->form_validation->set_rules('tempat_lahir_pegawai', 'tempat lahir pegawai', 'required');
    $this->form_validation->set_rules('tanggal_lahir_pegawai', 'tanggal lahir pegawai', 'required');
    $this->form_validation->set_rules('agama_pegawai', 'agama pegawai', 'required');
    $this->form_validation->set_rules('status_pegawai', 'status pegawai', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar', $data);
      $this->load->view('pegawai/edit', $data);
      $this->load->view('template/footer');
    } else {
      $this->M_pegawai->editpegawai();
      redirect('pegawai');
    }
  }

  public function hapus($id)
  {
    $this->M_pegawai->hapusPegawai($id);
    redirect('pegawai');
  }
}
?>