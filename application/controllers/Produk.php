<?php

class Produk extends CI_Controller

{
    public function index()
    {
        $this->load->model('Produk_model');
        $data['judul'] = 'List Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->getAllProduk();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/dashboard/produk', $data);
        $this->load->view('backend/templates/footer');
    }


    public function tambah_produk()
    {
        $data['judul'] = 'Tambah Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();


        $this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'numeric' => 'Harus Angka'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('id_kategori', 'Id_kategori', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric', [
            'required' => 'Harga Tidak Boleh Kosong',
            'numeric' => 'Harus Angka'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/dashboard/produk/tambah_produk', $data);
            $this->load->view('backend/templates/footer');
        } else {

            $nama_produk = $this->input->post('nama_produk');
            $stok = $this->input->post('stok');
            $id_kategori = $this->input->post('id_kategori');
            $deskripsi = $this->input->post('deskripsi');
            $harga = $this->input->post('harga');
            $image = $_FILES['image']['name'];

            if ($image = '') {
            } else {
                $config['upload_path'] = './assets/img/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    echo "gambar Gagal Di Upload";
                } else {
                    $image = $this->upload->data('file_name');
                }
            }

            $data = [
                'nama_produk' => $nama_produk,
                'image' => $image,
                'stok' => $stok,
                'deskripsi' => $deskripsi,
                'id_kategori' => $id_kategori,
                'harga' => $harga
            ];

            $this->db->insert('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Berhasil Di tambahkan</div>');
            redirect('produk');
        }
    }


    public function update()
    {
        $data['judul'] = 'Servis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();


        $this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('id_kategori', 'Id_kategori', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        $id = $this->input->post('id_produk');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/dashboard/servis', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                "nama_produk" => $this->input->post('nama_produk'),
                "stok" => $this->input->post('stok'),
                "deskripsi" => $this->input->post('deskripsi'),
                "id_kategori" => $this->input->post('id_kategori'),
                "harga" => $this->input->post('harga')

            ];

            $this->db->where('id_produk', $id);
            $this->db->update('produk', $data);
            $this->session->set_flashdata('update', '<div class="alert alert-success" role="alert">Data berhasil di Update</div>');
            redirect('produk');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Produk_model');
        $this->Produk_model->hapusData($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data berhasil di hapus</div>');
        redirect('produk');
    }

    public function detail($id_produk)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();
        $data['produk'] = $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();

        $this->load->view('frontend/templates/header2', $data);
        $this->load->view('frontend/home/detail_produk', $data);
        $this->load->view('frontend/templates/footer');
    }
}
