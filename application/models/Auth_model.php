<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function tambah()
    {
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "loker" => htmlspecialchars($this->input->post('loker', true)),
            "nik" => htmlspecialchars($this->input->post('nik', true)),
            "posisi" => htmlspecialchars($this->input->post('posisi', true)),
            "password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            "foto" => 'default.jpg',
            "level" => $this->input->post('level'),
            "status" => 'Aktif',
            "tanggal" => time()
        ];

        $this->db->insert('user', $data);
    }
}