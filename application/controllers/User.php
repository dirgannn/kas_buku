<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->db->select('*')->from('user')->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->load->view('user_index', $data);
    }
    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('level') != "Admin")) {
            redirect('home');
        }
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('user_tambah');
        } else {
            $username = $this->input->post('username');
            $this->load->model('User_model');
            if ($this->User_model->is_username_exists($username)) {
                $this->session->set_flashdata('tidaksama', 'Username sudah tersedia.');
                redirect('user');
            }
            $data = array(
                'username' => $username,
                'nama' => $this->input->post('nama'),
                'password' => md5($this->input->post('password')),
                'alamat' => $this->input->post('alamat'),
                'kelas' => $this->input->post('kelas'),
                'level' => $this->input->post('level'),
            );
            $this->User_model->create($data);
            $this->session->set_flashdata('success_user', '<div class="alert alert-success" role="alert">
            User berhasil ditambahkan!!
          </div>');
            redirect('user');
        }
    }

    public function get_username()
    {
        $user_id = 1;
        $data['username'] = $this->User_model->get_username_by_id($user_id);
        $this->load->view('view_name', $data);
    }
    public function edit($id)
    {
        $data['user'] = $this->user_model->get_item_by_id($id);
        $this->load->view('edit', $data);
    }


    public function update($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
            'alamat' => $this->input->post('alamat'),
            'kelas' => $this->input->post('kelas'),
        );

        $this->user_model->update_user($id, $data);
        $this->session->set_flashdata('edit_sucess', '<div class="alert alert-info" role="alert">
        Yey,, Data berhasil di ganti
      </div>');
        redirect('user');
    }


    public function delete_data($id)
    {
        $this->user_model->delete_data($id);
        redirect('user');
    }
}
