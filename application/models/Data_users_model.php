<?php

class Data_users_model extends CI_Model
{

    public function ambil()
    {
        return $query = $this->db->get('user')->result_array();
    }

    public function update($id)
    {
        $data = [
            "id" => $this->input->post('id'),
            "nama" => $this->input->post('nama'),
            "loker" => $this->input->post('loker'),
            "nik" => $this->input->post('nik'),
            "posisi" => $this->input->post('posisi'),
            "level" => $this->input->post('level'),
            "status" => $this->input->post('status')
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
}