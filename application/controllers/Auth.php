<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        $this->load->model('Auth_model');
        time_zone();
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
            [
                'required' => 'Field tidak boleh kosong !',
                'valid_email' => 'Email tidak valid'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Field tidak boleh kosong !'
            ]
        );
        if ($this->form_validation->run() == false) {

            $this->load->view('auth/login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();


            //jika akun ada
            if ($user) {
                //jika akun aktif
                if ($user['status'] == 'Aktif') {

                    //cek password
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'level' => $user['level'],
                            'nama' => $user['nama']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['level'] == 'Admin') {
                            $this->session->set_flashdata('pesan', 'Anda login sebagai ADMIN');
                            redirect('admin');
                        } else {
                            $this->session->set_flashdata('pesan', 'Anda login sebagai USER');
                            redirect('admin');
                        }
                    } else {
                        $this->session->set_flashdata('pesan', 'Password anda salah!');
                        redirect('auth');
                    }
                } else {

                    $this->session->set_flashdata('pesan', 'Akun anda sudah tidak aktif');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Email belum terdaftar!');
                redirect('auth');
            }
        }
    }

    public function register()
    {
        cek_login();
        akses();

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            ['required' => 'Field tidak boleh kosong !!!']
        );
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Alamat email sudah terdaftar!',
            'required' => 'Field tidak boleh kosong !!!'
        ]);
        $this->form_validation->set_rules('loker', 'Loker', 'required', [
            'required' => 'Field tidak boleh kosong !!!'
        ]);
        $this->form_validation->set_rules('nik', 'Nik', 'required|numeric|is_unique[user.nik]|max_length[8]|min_length[8]', [
            'required' => 'Field tidak boleh kosong !!!',
            'numeric' => 'Hanya diisi dengan angka !!!',
            'is_unique' => 'Nik sudah terpakai !!!',
            'max_length' => 'Nik maksimal 8 angka !!!',
            'min_length' => 'Nik minimal 8 angka !!!'
        ]);
        $this->form_validation->set_rules('posisi', 'Posisi', 'required', [
            'required' => 'Field tidak boleh kosong !!!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Konfirmasi password tidak sesuai !!!',
            'min_length' => 'Password minimal 3 karakter !!!',
            'required' => 'Field tidak boleh kosong !!!'
        ]);
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|matches[password1]',
            [
                'required' => 'Field tidak boleh kosong !!!',
                'matches' => 'Konfirmasi password tidak sesuai !!!',
            ]
        );
        $this->form_validation->set_rules(
            'level',
            'Level',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/register');
        } else {

            $this->Auth_model->tambah();
            $this->session->set_flashdata('pesan', 'Registrasi berhasil');
            redirect('admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');

        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}