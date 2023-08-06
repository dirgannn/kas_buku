<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemasukan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemasukan_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $user_id = $this->session->userdata('id_user');
        $data['pemasukan'] = $this->Transaksi_model->get_pemasukan_by_user_id($user_id);
        $data['username'] = $this->User_model->get_username_by_id($user_id);
        $this->load->view('pemasukan_pengeluaran', $data);
    }
    public function add_pemasukan()
    {
        $user_id = $this->session->userdata('id_user');

        if ($_POST) {
            $tanggal = $this->input->post('tanggal');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'user_id' => $user_id,
                'jenis_transaksi' => 'Pemasukan',
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            );

            $this->load->model('Transaksi_model');
            $this->Transaksi_model->insert_data($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('pemasukan/add_pemasukan');
        }
        $this->load->model('Transaksi_model');
        $this->load->model('User_model');
        $data['transaksi'] = $this->Transaksi_model->get_data_pemasukan();
        $this->load->view('pemasukan/pemasukan', $data);
    }
    public function add_pemasukan_admin()
    {
        $user_id = $this->session->userdata('id_user');

        if ($_POST) {
            $tanggal = $this->input->post('tanggal');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'user_id' => $user_id,
                'jenis_transaksi' => 'Pemasukan',
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            );
            $this->load->model('Transaksi_model');
            $this->Transaksi_model->insert_data($data);
            $this->session->set_flashdata('success_pemasukan', '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!!
          </div>');
            redirect('pemasukan/add_pemasukan_admin');
        }
        if (($this->session->userdata('level') != "Admin")) {
            redirect('home');
        }
        $this->load->model('Transaksi_model');
        $this->load->model('User_model');
        $this->load->model('Pemasukan_model');
        $data['transaksi'] = $this->Transaksi_model->get_data_pemasukan();
        $data['pemasukan'] = $this->Pemasukan_model->get_all_pemasukan();
        $data['user_role'] = 'admin';

        $this->load->view('pemasukan/pemasukan_admin', $data);
    }
    public function pemasukan_admin_delete($id)
    {
        $this->Transaksi_model->delete_pemasukan($id);
        redirect('pemasukan/add_pemasukan_admin');
    }
    public function edit($id)
    {

        $this->load->model('Transaksi_model');
        $transaksi = $this->Transaksi_model->get_pemasukan_by_id($id);
        $data['transaksi'] = $transaksi;
        $this->load->view('edit_transaksi', $data);
    }
    public function edit1($id)
    {
        $this->load->model('Transaksi_model');
        $transaksi = $this->Transaksi_model->get_pemasukan_by_id($id);
        $data['transaksi'] = $transaksi;
        $this->load->view('edit_pemasukan', $data);
    }

    public function update()
    {
        if ($_POST) {
            $id = $this->input->post('id');
            $tanggal = $this->input->post('tanggal');
            $jumlah = $this->input->post('jumlah');
            $data = array(
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            );
            $this->Pemasukan_model->update_pemasukan1($id, $data);
            $this->session->set_flashdata('edit_success', '<div class="alert alert-info" role="alert">
            Yey,, Data berhasil di ganti
          </div>');
            redirect('pemasukan/index');
        }
    }
    public function update1()
    {
        if ($_POST) {
            $id = $this->input->post('id');
            $tanggal = $this->input->post('tanggal');
            $jumlah = $this->input->post('jumlah');
            $data = array(
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            );

            $this->Pemasukan_model->update_pemasukan1($id, $data);
            $this->session->set_flashdata('edit_success', '<div class="alert alert-info" role="alert">
            Yey,, Data berhasil di ganti
          </div>');
            redirect('pemasukan/add_pemasukan_admin');
        }
    }
}
