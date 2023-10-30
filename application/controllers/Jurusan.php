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
}

?>