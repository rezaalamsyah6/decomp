<?php

class Dashboard extends CI_Controller
{


    public function index()

    {
        $data['judul'] = 'Halaman dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/dashboard/index', $data);
        $this->load->view('backend/templates/footer');
    }

    public function produk()
    {
        $data['judul'] = 'Halaman Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/dashboard/produk', $data);
        $this->load->view('backend/templates/footer');
    }

    public function profile()
    {
        $data['judul'] = 'Halaman Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/dashboard/profile', $data);
        $this->load->view('backend/templates/footer');
    }


    public function edit_profile()
    {
        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/dashboard/edit_profile', $data);
            $this->load->view('backend/templates/footer');
        } else {

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
            $this->db->set('phone', $phone);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile sudah di update</div>');
            redirect('dashboard/profile');
        }
    }


    public function list_user()
    {
        $data['judul'] = 'List User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/dashboard/list_user', $data);
        $this->load->view('backend/templates/footer');
    }
}
