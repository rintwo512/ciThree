<?php

class Apart_model extends CI_Model
{
    function get()
    {
        return $query = $this->db->get('tb_apart')->result_array();
    }
    function insert()
    {

        $data =
            [
                'aset' => $this->input->post('aset'),
                'wing' => $this->input->post('wing'),
                'lantai' => $this->input->post('lantai'),
                'lokasi' => $this->input->post('lokasi'),
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'berat' => $this->input->post('berat'),
                'status' => $this->input->post('status'),
                'no_seri' => $this->input->post('no_seri'),
                'tanggal_expire' => strtotime($this->input->post('tgl_expire')),
                'catatan' => $this->input->post('catatan'),
                'tanggal_update' => time()
            ];

        $this->db->insert('tb_apart', $data);
    }

    function update($id)
    {

        $data =
            [
                'id' => $this->input->post('id'),
                'aset' => $this->input->post('aset'),
                'wing' => $this->input->post('wing'),
                'lantai' => $this->input->post('lantai'),
                'lokasi' => $this->input->post('lokasi'),
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'berat' => $this->input->post('berat'),
                'status' => $this->input->post('status'),
                'no_seri' => $this->input->post('no_seri'),
                'tanggal_expire' => strtotime($this->input->post('tgl_expire')),
                'catatan' => $this->input->post('catatan'),
                'tanggal_update' => time()
            ];
        $this->db->where('id', $id);
        $this->db->update('tb_apart', $data);
    }

    function delete($id)
    {
        $this->db->delete('tb_apart', ['id' => $id]);
    }
}