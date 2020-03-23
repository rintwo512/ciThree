<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_users_model');
        cek_login(); //helper
        akses(); //helper
        time_zone(); //helpe
    }
    public function index()
    {
        $data['users'] = $this->Data_users_model->ambil();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_users', $data);
        $this->load->view('templates/skin');
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users_update'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $this->form_validation->set_rules('nama', 'Nama');
        $this->form_validation->set_rules('loker', 'Loker');
        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|trim|numeric|max_length[8]|min_length[8]',
            [
                'min_length' => 'Minimal 8 angka !',
                'max_length' => 'Maximal 8 angka !',
                'numeric' => 'Tidak boleh berisi karakter lain,kecuali angka !'
            ]
        );
        $this->form_validation->set_rules('posisi', 'Posisi');
        $this->form_validation->set_rules('level', 'Level');
        $this->form_validation->set_rules('status', 'Status');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/update_user', $data);
        } else {

            $this->Data_users_model->update($id);
            $this->session->set_flashdata('popbox', 'Data berhasil ubah');
            redirect('data_users');
        }
    }

    public function hapus($id)
    {
        $this->Data_users_model->hapus($id);
        redirect('data_users');
    }
}