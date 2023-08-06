<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{

    public function insert_data($data)
    {
        $this->db->insert('transaksi', $data);
    }

    public function get_all_transaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function get_total_pemasukan_hari_ini()
    {

        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d");
        $this->db->select('sum(jumlah) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m-%d') =", $tanggal);
        return $this->db->get()->row()->total;
    }
    public function get_total_pemasukan_bulan_ini()
    {
        $this->db->select_sum('jumlah');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        $this->db->where('MONTH(tanggal)', date('m'));
        $this->db->where('YEAR(tanggal)', date('Y'));
        $result = $this->db->get('transaksi')->row_array();
        return $result['jumlah'];
    }

    public function get_total_pemasukan_keseluruhan()
    {
        $total_pemasukan_hari_ini = $this->get_total_pemasukan_hari_ini();
        $total_pemasukan_bulan_ini = $this->get_total_pemasukan_bulan_ini();

        return $total_pemasukan_hari_ini + $total_pemasukan_bulan_ini;
    }
    public function get_total_pengeluaran_hari_ini()
    {

        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d");
        $this->db->select('sum(jumlah) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m-%d') =", $tanggal);
        return $this->db->get()->row()->total;
    }
    public function get_total_pengeluaran_bulan_ini()
    {
        $this->db->select_sum('jumlah');
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        $this->db->where('MONTH(tanggal)', date('m'));
        $this->db->where('YEAR(tanggal)', date('Y'));
        $result = $this->db->get('transaksi')->row_array();
        return $result['jumlah'];
    }
    public function get_total_pengeluaran_keseluruhan()
    {
        $total_pengeluaran_hari_ini = $this->get_total_pengeluaran_hari_ini();
        $total_pengeluaran_bulan_ini = $this->get_total_pengeluaran_bulan_ini();

        return $total_pengeluaran_hari_ini + $total_pengeluaran_bulan_ini;
    }
    public function get_total_keseluruhan()
    {
        $total_pemasukan_keseluruhan = $this->get_total_pemasukan_keseluruhan();
        $total_pengeluaran_keseluruhan = $this->get_total_pengeluaran_keseluruhan();

        return $total_pemasukan_keseluruhan - $total_pengeluaran_keseluruhan;
    }
    public function get_item_by_id($user_id)
    {
        $this->db->select('*');
        $this->db->where('id_user', $user_id);
        $this->db->where('jenis_transaksi', 'Pemasukan');
        $query = $this->db->get('transaksi');

        return $query->row_array();
    }
    public function get_pemasukan_by_user_id($user_id)
    {
        $this->db->select('t.*, u.username');
        $this->db->where('user_id', $user_id);
        $this->db->from('transaksi t');
        $this->db->join('user u', 't.user_id = u.id_user');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    public function get_pemasukan_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('transaksi')->row_array();
    }

    public function get_data_pemasukan()
    {
        $this->db->select('t.*, u.username');
        $this->db->from('transaksi t');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        $this->db->join('user u', 't.user_id = u.id_user');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    public function get_data_pengeluaran()
    {
        $this->db->select('t.*, u.username');
        $this->db->from('transaksi t');
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        $this->db->join('user u', 't.user_id = u.id_user');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    public function delete_transaksi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
    }
    public function delete_pemasukan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
    }
    public function delete_pengeluaran($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
    }
}
