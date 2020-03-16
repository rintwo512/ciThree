<?php

class Ac_m extends CI_Model
{
    public function ambil()
    {
        return $query = $this->db->get('tb_ac')->result_array();
    }
    public function tambah($data)
    {


        $this->db->insert('tb_ac', $data);
    }

    public function ubah($id, $data)
    {


        $this->db->where('id', $id);
        $this->db->update('tb_ac', $data);
    }

    public function hapus($id)

    {

        $this->db->delete('tb_ac', ['id' => $id]);
    }

    public function ambil_update($id)
    {

        $this->db->where('id', 102);
        $query = $this->db->get('tb_ac');
        return $query->result();
    }
}