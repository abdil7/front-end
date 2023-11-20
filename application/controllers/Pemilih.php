<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {
    public function index()
    {
        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $this->load->view('pemilih/index', $data);
    }

    public function detail($id)
    {
        $data['kandidat'] = $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
        $this->load->view('pemilih/detail', $data);
    }
}