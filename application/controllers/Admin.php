<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        cek_login();
        time_zone();
    }
    public function index()
    {

        // $log = $this->Admin_model->login();


        $data['log'] = $this->db->get('user')->result_array();




        $data['ac'] = $this->db->get('tb_ac')->num_rows();
        $data['apart'] = $this->db->get('tb_apart')->num_rows();

        $data['total_users'] = $this->db->get('user')->num_rows();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/skin');
        $this->load->view('templates/footer');
    }

    public function profile()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('templates/skin');
            $this->load->view('templates/footer');
        } else {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $upload_foto = $_FILES['foto']['name'];


            if ($upload_foto) {
                $config['allowed_types'] = 'gif|jpeg|jpg|png';
                $config['max_size'] = '5240';
                $config['upload_path'] = './asset/dist/img/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    $foto_lama = $data['user']['foto'];
                    if ($foto_lama != 'default.jpg') {
                        unlink(FCPATH . 'asset/dist/img/' . $foto_lama);
                    }

                    $foto_baru = $this->upload->data('file_name');
                    $this->db->set('foto', $foto_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Admin_model->update_profile($nama, $email);
            $this->session->set_flashdata('pesan', 'Profile Berhasil Diubah');
            redirect('admin/profile');
        }
    }

    public function ubah_password()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules(
            'password_lama',
            'Password Lama',
            'required|trim',
            [
                'required' => 'Harus Di isi !'
            ]
        );
        $this->form_validation->set_rules(
            'password_baru',
            'Password Baru',
            'required|trim|min_length[3]|matches[konfirmasi_password]',
            [
                'required' => 'Harus Di isi !',
                'min_length' => 'Minimal 3 karakter !',
                'matches' => 'Konfirmasi password tidak sesuai !'
            ]
        );
        $this->form_validation->set_rules(
            'konfirmasi_password',
            'Konfirmasi Password',
            'required|trim|min_length[3]|matches[password_baru]',
            [
                'required' => 'Harus Di isi !',
                'min_length' => 'Minimal 3 karakter',
                'matches' => 'Konfirmasi password tidak sesuai'
            ]
        );

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('templates/skin');
            $this->load->view('templates/footer');
        } else {

            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('alert', 'Password anda salah !');
                redirect('admin/ubah_password', 'refresh');
            } else {
                if ($password_baru == $password_lama) {
                    $this->session->set_flashdata('alert', 'Password baru tidak boleh sama dengan password baru !');
                    redirect('admin/ubah_password', 'refresh');
                } else {
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->Admin_model->update_password($password_hash);
                    $this->session->set_flashdata('pesan', 'Password anda berhasil diubah');

                    redirect('admin/ubah_password', 'refresh');
                }
            }
        }
    }

    public function tentang($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules(
            'hp',
            'Hp',
            'numeric',
            [
                'numeric' => '(Hanya di isi dengan angka !)'
            ]
        );
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('templates/skin');
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->up_tentang($id);
            redirect('admin/profile');
        }
    }
}

// $password_lama = $this->input->post('password_lama');
//             $password_baru = $this->input->post('password_baru');

//             if (!password_verify($password_lama, $data['user']['password'])) {
//                 $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Password lama anda salah !</div>');
//                 redirect('admin/ubah_password');
//             } else {

//                 if ($password_lama == $password_baru) {

//                     $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Password lama tidak boleh sama dengan password baru !</div>');
//                     redirect('admin/ubah_password');
//                 } else {
//                     $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

//                     $this->Admin_model->update_password($password_hash);
//                     $this->session->set_flashdata('pesan', 'Password berhasil di ubah');
//                     redirect('admin/ubah_password');
//                 }
//             }