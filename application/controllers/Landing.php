<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_m');
        $this->load->model('M_jurusan');
        $this->load->model('M_kelas');
        $this->load->model('M_pegawai');
    }
    public function index()
    {

        $data['row'] = $this->Data_m->data();
        $data['jurusan'] = $this->M_jurusan->jurusan();
        $data['kelas'] = $this->M_kelas->kelas();
        $data['pegawai'] = $this->M_pegawai->pegawai();

        $this->load->view('landing/index', $data);
    }
    public function rpl()
    {
        $this->load->view('landing/rpl');
    }
}
