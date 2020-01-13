<?php

class Kategori extends CI_Controller
{
    public function index()
    {
        $this->load->model('Kategori_model');
        $data['judul'] = 'List Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //pagination
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/decomp/kategori';
        $config['total_rows'] = $this->Kategori_model->countAllKategori();
        $config['per_page'] = 10;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(1);
        $data['kategori_produk'] = $this->Kategori_model->getAllKategori($config['per_page']);

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/dashboard/kategori', $data);
        $this->load->view('backend/templates/footer');
    }
}
