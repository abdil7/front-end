<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login/login');
        } else {
            $this->rawr();
        }
    }
     
    public function rawr()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if($user) {
            if(password_verify($password, $user['password'])) {
                redirect('pemilih');
            } else {
                redirect('login');
            }
        } else {
            redirect('login');
        }
    }

    public function user() {
        $this->load->view('user');
    }

    public function registration()
    {
        $this->load->model('Login_model', 'l');

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/registration');
        } else {
            $this->l->register();
            redirect('login');
        }
    }
}
