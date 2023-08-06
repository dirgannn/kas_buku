<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Transaksi extends CI_Controller
{

    public function index()
    {
        $this->load->model('Transaksi_model');
        $data['total_pemasukan_hari_ini'] = $this->Transaksi_model->get_total_pemasukan_hari_ini();
        $data['total_pemasukan_bulan_ini'] = $this->Transaksi_model->get_total_pemasukan_bulan_ini();
        $data['total_pemasukan_keseluruhan'] = $this->Transaksi_model->get_total_pemasukan_keseluruhan();
        $data['total_pengeluaran_hari_ini'] = $this->Transaksi_model->get_total_pengeluaran_hari_ini();
        $data['total_pengeluaran_bulan_ini'] = $this->Transaksi_model->get_total_pengeluaran_bulan_ini();
        $data['total_pengeluaran_keseluruhan'] = $this->Transaksi_model->get_total_pengeluaran_keseluruhan();
        $data['total_keseluruhan'] = $this->Transaksi_model->get_total_keseluruhan();
        $this->load->view('dashboard', $data);
    }



    public function delete($id)
    {
        $this->Transaksi_model->delete_pemasukan($id);
        redirect('pemasukan');
    }
    public function transaksi_delete($id)
    {
        $this->Transaksi_model->delete_transaksi($id);
        redirect('pemasukan');
    }

    public function admin_delete($id)
    {
        $this->Transaksi_model->delete_pemasukan($id);
        redirect('transaksi/add_pemasukan_admin');
    }


    // ...
}
