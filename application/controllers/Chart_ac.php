<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart_ac extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chart_ac_model');
        cek_login(); //helper
        //helper
        time_zone();
    }
    public function index()
    {

        akses();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['chart_ac'] = $this->Chart_ac_model->get();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('chart_ac/index', $data);
        $this->load->view('templates/skin');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        akses();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('chart_ac/index', $data);
            $this->load->view('templates/skin');
            $this->load->view('templates/footer');
        } else {
            $this->Chart_ac_model->insert();
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect('chart_ac');
        }
    }

    public function ubah($id)
    {
        akses();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('tb_chart_ac', ['id' => $id])->row_array();

        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required');
        $this->form_validation->set_rules('unit', 'unit', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('chart_ac/update', $data);
            $this->load->view('templates/skin');
            $this->load->view('templates/footer');
        } else {
            $this->Chart_ac_model->update($id);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect('chart_ac');
        }
    }

    public function hapus($id)
    {
        akses();
        $this->Chart_ac_model->delete($id);
        redirect('chart_ac');
    }


    // ************Column Chart AC************


    public function tampil()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['year_list'] = $this->Chart_ac_model->get_year();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('chart_ac/grafik_column', $data);
        $this->load->view('templates/skin');
        $this->load->view('templates/footer');
    }

    public function ambil_data_chart()
    {
        if ($this->input->post('tahun')) {
            $chart_data = $this->Chart_ac_model->get_chart_data($this->input->post('tahun'));
            foreach ($chart_data->result_array() as $row) {
                $output[] = array(
                    'bulan' => $row["bulan"],
                    'unit' => floatval($row["unit"])
                );
            }
            echo json_encode($output);
        }
    }
}