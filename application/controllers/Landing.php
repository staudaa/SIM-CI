<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    public function index()
    {
        $this->load->view('landing/index');
    }
    public function rpl()
    {
        $this->load->view('landing/rpl');
    }
}