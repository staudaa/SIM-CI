<?php
class Data extends CI_Controller
{
  public function __construct()
  {

    parent::__construct();
    $this->load->model('M_data');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'data siswa';
    $data['data'] = $this->M_data->get_data();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('data/data');
    $this->load->view('template/footer');
  }
  public function tambah()
  {
    $data['title'] = 'tambah data siswa';
    $this->form_validation->set_rules('nama', 'nama siswa', 'required');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('data/tambah');
      $this->load->view('template/footer');
    } else {
      $this->M_data->tambahData();
      redirect('data');
    }
  }
}


?>