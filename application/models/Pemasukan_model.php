<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemasukan_model extends CI_Model
{
    public function get_all_pemasukan()
    {
        $this->db->where('jenis_transaksi', 'Pemasukan');
        return $this->db->get('transaksi')->result_array();
    }

    public function get_pemasukan_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('transaksi')->row_array();
    }

    public function update_pemasukan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->where('jenis_transaksi', 'Pemasukan');
        $this->db->update('transaksi', $data);
    }
    public function update_pemasukan1($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('transaksi', $data);
    }
}
