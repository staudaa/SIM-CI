<?php
class Dashboard extends CI_Controller {

  public function index(){
    $data['title']='dashboard';
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('dashboard');
    $this->load->view('template/footer');
  }
}



?>