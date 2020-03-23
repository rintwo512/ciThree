<?php

class Admin_model extends CI_Model
{

    function login()
    {
        $this->db->where_in('user_login');
        return $query = $this->db->get('user');
    }


    function update_profile($nama, $email)
    {


        $this->db->set('nama', $nama);
        $this->db->where('email', $email);
        $this->db->update('user');
    }

    function update_password($password_hash)
    {
        $this->db->set('password', $password_hash);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user');
    }

    function up_tentang($id)
    {
        $data = [
            'pendidikan' => $this->input->post('pendidikan'),
            'alamat' => $this->input->post('alamat'),
            'hp' => $this->input->post('hp'),
            'skil' => $this->input->post('skil'),
            'catatan' => $this->input->post('catatan'),
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}