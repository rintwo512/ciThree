<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kunci_layar extends CI_Controller
{
    public function index()
    {
        cek_login();
        time_zone();


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('layar_kunci/layar_kunci', $data);
        } else {
            $password = $this->input->post('password');
            $data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            if (password_verify($password, $data['password'])) {
                $this->session->set_flashdata('pesan', 'Selamat Datang Kembali');
                redirect('admin');
            } else {
                $this->session->set_flashdata('pesan', 'Password anda salah!');

                redirect('kunci_layar');
            }
        }
    }
}