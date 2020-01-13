<?php

class User extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Home';
        $this->load->view('frontend/templates/header');
        $this->load->view('frontend/home/index');
        $this->load->view('frontend/templates/footer');
    }
}
