<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();
    }

    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/home/index');
        $this->load->view('frontend/templates/footer');
    }

    public function home_servis()
    {
        $data['judul'] = 'Servis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();

        $data['servis'] = $this->db->get('servis')->result_array();

        $this->load->view('frontend/templates/header2', $data);
        $this->load->view('frontend/home/servis', $data);
        $this->load->view('frontend/templates/footer');
    }


    public function servis_cari()
    {
        $data['judul'] = 'Servis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $keyword =  $this->input->post('keyword');
        $this->load->model('Servis_model');
        $data['servis'] = $this->Servis_model->cariDataServis($keyword);

        $this->load->view('frontend/templates/header2', $data);
        $this->load->view('frontend/home/servis', $data);
        $this->load->view('frontend/templates/footer');
    }


    public function profile()
    {
        $data['judul'] = 'User Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();

        $this->load->view('frontend/templates/header2', $data);
        $this->load->view('frontend/profile/index', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function edit_profile()
    {
        $data['judul'] = 'User Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('frontend/templates/header2', $data);
            $this->load->view('frontend/profile/index', $data);
            $this->load->view('frontend/templates/footer');
        } else {

            $id = $this->input->post('id_user');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');

            //cek gambar
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/upload/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];

                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/upload/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('email', $email);
            $this->db->set('phone', $phone);
            $this->db->where('id_user', $id);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile sudah di update</div>');
            redirect('home/profile');
        }
    }


    public function changepassword()
    {
        $data['judul'] = 'User Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[5]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header2', $data);
            $this->load->view('frontend/profile/index', $data);
            $this->load->view('frontend/templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Password Sekarang Anda Salah!</div>');
                redirect('home/profile');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Password Tidak Boleh Sama Dengan Yang Lama!</div>');
                    redirect('home/profile');
                } else {
                    // password benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);


                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('password', '<div class="alert alert-success" role="alert">Password Berhasil Diubah!</div>');
                    redirect('home/profile');
                }
            }
        }
    }

    public function all_products()
    {
        $data['judul'] = 'Halaman Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Produk_model');
        $data['produk'] = $this->Produk_model->getAllProduk();
        $data['kategori_produk'] = $this->db->get('kategori_produk')->result_array();


        $this->load->view('frontend/templates/header2', $data);
        $this->load->view('frontend/home/products', $data);
        $this->load->view('frontend/templates/footer');
    }
}
