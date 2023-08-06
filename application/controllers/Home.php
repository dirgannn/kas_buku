<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        if (($this->session->userdata('level') != "Admin") and ($this->session->userdata('level') != "Siswa")) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->load->view('dashboard');
    }
}
