<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function register()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name')),
            'Username' => htmlspecialchars($this->input->post('username')),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];

        $this->db->insert('user', $data);
    }
}