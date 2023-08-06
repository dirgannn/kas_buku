<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran extends CI_Controller
{

    public function index()
    {
        $this->load->model('Transaksi_model');
        $this->load->model('User_model');
        $data['transaksi'] = $this->Transaksi_model->get_data_pengeluaran();
        $this->load->view('pengeluaran/pengeluaran', $data);
    }
    public function add_pengeluaran()
    {
        $user_id = $this->session->userdata('id_user');

        if ($_POST) {
            $tanggal = $this->input->post('tanggal');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'user_id' => $user_id,
                'jenis_transaksi' => 'Pengeluaran',
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            );

            $this->load->model('Transaksi_model');
            $this->Transaksi_model->insert_data($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('pengeluaran/add_pengeluaran');
        }
        $data['transaksi'] = $this->Transaksi_model->get_data_pengeluaran();
        $this->load->view('pengeluaran/pengeluaran', $data);
    }
    public function add_pengeluaran_admin()
    {
        $user_id = $this->session->userdata('id_user');

        if ($_POST) {
            $tanggal = $this->input->post('tanggal');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'user_id' => $user_id,
                'jenis_transaksi' => 'Pengeluaran',
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            );

            $this->load->model('Transaksi_model');
            $this->Transaksi_model->insert_data($data);
            $this->session->set_flashdata('success_pengeluaran', '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!!
          </div>');
            redirect('pengeluaran/add_pengeluaran_admin');
        }
        if (($this->session->userdata('level') != "Admin")) {
            redirect('home');
        }
        $this->load->model('Transaksi_model');
        $this->load->model('User_model');
        $data['transaksi'] = $this->Transaksi_model->get_data_pengeluaran();
        $this->load->view('pengeluaran/pengeluaran_admin', $data);
    }

    public function edit($id)
    {
        $this->load->model('Transaksi_model');
        $transaksi = $this->Transaksi_model->get_pemasukan_by_id($id);
        // Jika ada, tampilkan form edit data transaksi
        $data['transaksi'] = $transaksi;
        $this->load->view('edit_pengeluaran', $data);
    }
    public function update()
    {
        $this->load->model('Pengeluaran_model');
        if ($_POST) {
            $id = $this->input->post('id');
            $tanggal = $this->input->post('tanggal');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'tanggal' => $tanggal,
                'jumlah' => $jumlah
            );
            $this->Pengeluaran_model->update_pengeluaran($id, $data);
            $this->session->set_flashdata('edit_successs', '<div class="alert alert-info" role="alert">
            Yey,, Data berhasil di ganti
          </div>');
            redirect('pengeluaran/add_pengeluaran_admin');
        }
    }
    public function pengeluaran_admin_delete($id)
    {
        $this->Transaksi_model->delete_pengeluaran($id);
        redirect('pengeluaran/add_pengeluaran_admin');
    }

    public function pengeluaran_delete($id)
    {
        $this->Transaksi_model->delete_pengeluaran($id);
        redirect('pengeluaran/add_pengeluaran');
    }
}
