<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function create($data)
    {
        $this->db->insert('user', $data);
    }
    public function is_username_exists($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return ($query->num_rows() > 0);
    }
    public function get_item_by_id($user_id)
    {
        $this->db->where('id_user', $user_id);
        $query = $this->db->get('user');

        return $query->row_array();
    }
    public function get_username_by_id($user_id)
    {
        $this->db->select('username');
        $this->db->where('id_user', $user_id);
        return $this->db->get('user')->row_array();
    }

    public function update_user($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }
    public function delete_data($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
}
