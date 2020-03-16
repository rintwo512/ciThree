<?php

class Chart_ac_model extends CI_Model
{
    function get()
    {
        return $query = $this->db->get('tb_chart_ac')->result_array();
    }

    function insert()
    {
        $data =
            [
                'tahun' => $this->input->post('tahun'),
                'bulan' => $this->input->post('bulan'),
                'unit' => $this->input->post('unit')
            ];

        $this->db->insert('tb_chart_ac', $data);
    }

    function update($id)
    {
        $data =
            [
                'id' => $this->input->post('id'),
                'tahun' => $this->input->post('tahun'),
                'bulan' => $this->input->post('bulan'),
                'unit' => $this->input->post('unit')
            ];

        $this->db->where('id', $id);
        $this->db->update('tb_chart_ac', $data);
    }

    function delete($id)
    {
        $this->db->delete('tb_chart_ac', ['id' => $id]);
    }

    function get_year()
    {
        $this->db->select('tahun');
        $this->db->from('tb_chart_ac');
        $this->db->group_by('tahun');
        $this->db->order_by('tahun', 'DESC');
        return $this->db->get();
    }

    function get_chart_data($tahun)
    {
        $this->db->where('tahun', $tahun);
        $this->db->order_by('tahun', 'ASC');
        return $this->db->get('tb_chart_ac');
    }
}