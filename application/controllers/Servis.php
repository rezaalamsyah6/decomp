<?php

class Servis extends CI_Controller

{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Servis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['servis'] = $this->db->get('servis')->result_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/dashboard/servis', $data);
        $this->load->view('backend/templates/footer');
    }


    public function tambah()
    {
        $data['judul'] = 'Tambah Servis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kode_servis', 'Kode_servis', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama_barang', 'required');
        $this->form_validation->set_rules('jenis_servis', 'Jenis_servis', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/dashboard/tambah_servis', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                'kode_servis' => $this->input->post('kode_servis'),
                'nama_barang' => $this->input->post('nama_barang'),
                'jenis_servis' => $this->input->post('jenis_servis'),
                'status' => $this->input->post('status'),
            ];
            $this->db->insert('servis', $data);
            $this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert">
            Data Servis Telah Di Tambahkan
          </div>');
            redirect('servis');
        }
    }


    public function update()
    {

        $data['judul'] = 'Servis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['servis'] = $this->db->get('servis')->result_array();

        $this->form_validation->set_rules('kode_servis', 'Kode_servis', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama_barang', 'required');
        $this->form_validation->set_rules('jenis_servis', 'Jenis_servis', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $id = $this->input->post('id_servis');


        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/dashboard/servis', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                "kode_servis" => $this->input->post('kode_servis'),
                "nama_barang" => $this->input->post('nama_barang'),
                "jenis_servis" => $this->input->post('jenis_servis'),
                "status" => $this->input->post('status'),
            ];

            $this->db->where('id_servis', $id);
            $this->db->update('servis', $data);
            $this->session->set_flashdata('update', '<div class="alert alert-success" role="alert">Data berhasil di Update</div>');
            redirect('servis');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Servis_model');
        $this->Servis_model->hapusData($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data berhasil di hapus</div>');
        redirect('servis');
    }
}
