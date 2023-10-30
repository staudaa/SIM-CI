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
}
?>