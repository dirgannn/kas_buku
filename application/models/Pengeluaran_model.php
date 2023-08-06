<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model
{
    public function update_pengeluaran($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        $this->db->update('transaksi', $data);
    }
}
