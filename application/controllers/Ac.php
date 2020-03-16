<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ac extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ac_m');
        cek_login();
        time_zone();
    }
    public function index()
    {

        $data['kapasitas'] = ['1/2 PK', '3/4 PK', '1 PK', '1,5 PK', '2 PK', '2,5 PK', '3 PK', '5 PK'];
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['airco'] = $this->Ac_m->ambil();


        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('ac/index', $data);
        $this->load->view('templates/skin');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('asset', 'Asset', 'required');
        $this->form_validation->set_rules('wing', 'Wing', 'required');
        $this->form_validation->set_rules('lantai', 'Lantai', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required');
        $this->form_validation->set_rules('refrigerant', 'Refirgerant', 'required');
        $this->form_validation->set_rules('negara_pembuat', 'Negara Pembuat', 'required');
        $this->form_validation->set_rules('tgl_maint', 'Tgl_maint', 'required');
        $this->form_validation->set_rules('st_kompresor', 'St_kompresor', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('ac/index', $data);
            $this->load->view('templates/skin');
            $this->load->view('templates/footer');
        } else {


            $data =
                [
                    "asset" => $this->input->post('asset'),
                    "wing" => $this->input->post('wing'),
                    "lantai" => $this->input->post('lantai'),
                    "lokasi" => $this->input->post('lokasi'),
                    "merk" => $this->input->post('merk'),
                    "type" => $this->input->post('type'),
                    "jenis" => $this->input->post('jenis'),
                    "kapasitas" => $this->input->post('kapasitas'),
                    "refrigerant" => $this->input->post('refrigerant'),
                    "negara_pembuat" => $this->input->post('negara_pembuat'),
                    "tgl_pemasangan" => $this->input->post('tgl_pemasangan'),
                    "tgl_maint" => $this->input->post('tgl_maint'),
                    "jenis_kerusakan" => $this->input->post('jenis_kerusakan'),
                    "st_kompresor" => $this->input->post('st_kompresor'),
                    "status" => $this->input->post('status'),
                    "catatan" => $this->input->post('catatan'),
                    "tanggal" => time()
                ];
            $this->Ac_m->tambah($data);
        }
        $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
        redirect('ac');
    }

    public function update($id)
    {




        $data['kapasitas'] = ['1/2 PK', '3/4 PK', '1 PK', '1,5 PK', '2 PK', '2,5 PK', '3 PK', '5 PK'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['air'] = $this->db->get_where('tb_ac', ['id' => $id])->row_array();

        $data['wing'] = ['Wing A', 'Wing B', 'Wing C', 'Wing D'];

        $this->form_validation->set_rules(
            'asset',
            'Asset',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'wing',
            'Wing',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'lantai',
            'Lantai',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'lokasi',
            'Lokasi',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'merk',
            'Merk',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'type',
            'Type',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'jenis',
            'Jenis',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'kapasitas',
            'Kapasitas',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'refrigerant',
            'Refirgerant',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'negara_pembuat',
            'Negara Pembuat',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'tgl_maint',
            'Tgl_maint',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'st_kompresor',
            'St_kompresor',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required',
            [
                'required' => 'Field tidak boleh kosong !!!'
            ]
        );
        if ($this->form_validation->run() == false) {


            $this->load->view('ac/update', $data);
        } else {
            $data =
                [

                    "id" => $this->input->post('id'),
                    "asset" => $this->input->post('asset'),
                    "wing" => $this->input->post('wing'),
                    "lantai" => $this->input->post('lantai'),
                    "lokasi" => $this->input->post('lokasi'),
                    "merk" => $this->input->post('merk'),
                    "type" => $this->input->post('type'),
                    "jenis" => $this->input->post('jenis'),
                    "kapasitas" => $this->input->post('kapasitas'),
                    "refrigerant" => $this->input->post('refrigerant'),
                    "negara_pembuat" => $this->input->post('negara_pembuat'),
                    "tgl_pemasangan" => $this->input->post('tgl_pemasangan'),
                    "tgl_maint" => $this->input->post('tgl_maint'),
                    "jenis_kerusakan" => $this->input->post('jenis_kerusakan'),
                    "st_kompresor" => $this->input->post('st_kompresor'),
                    "status" => $this->input->post('status'),
                    "catatan" => $this->input->post('catatan'),
                    "tanggal" => time()
                ];

            $chat_id = "-381779502";
            $message = "*<<<<<<<< PESAN OTOMATIS >>>>>>>>*" . "\n\n" .

                "Laporan dari  : "  .  "_" . $this->session->userdata('nama') . "_" . "\n\n" .

                "Opsi  : " . "\n" . "`Update data`" . "\n\n" .

                "Data  :  " . "\n" . "`Air Conditioner`" .  "\n\n" .

                "Status  : " . "\n" . "`Berhasil`" . "\n\n" .

                "Tanggal : " . "\n" . "`" . date('d M Y') . "`" .

                "\n\n" . "*<<<<<<<<<<< WEBTECH >>>>>>>>>>>*";

            $token = "1013071550:AAG4OB8mi2X1_jhOIRlhk7XzN2L1D9w_Rao";

            $url = "https://api.telegram.org/bot" . $token . "/sendMessage?parse_mode=markdown&chat_id=" . $chat_id;
            $ur = $url . "&text=" . urlencode($message);
            $ss = curl_init();
            $arr = array(
                CURLOPT_URL => $ur,
                CURLOPT_RETURNTRANSFER => true
            );
            curl_setopt_array($ss, $arr);
            $result = curl_exec($ss);
            curl_close($ss);
            $this->Ac_m->ubah($id, $data);
            $this->session->set_flashdata('pesan', 'Data berhasil ubah');
            var_dump($chat_id, $message, $token);
            redirect('ac');
        }
    }

    public function delete($id)
    {
        $chat_id = "-381779502";
        $message = "*<<<<<<<< PESAN OTOMATIS >>>>>>>>*" . "\n\n" .

            "Laporan dari  : "  .  "_" . $this->session->userdata('nama') . "_" . "\n\n" .

            "Opsi  : " . "\n" . "`Delete data`" . "\n\n" .

            "Data  :  " . "\n" . "`Air Conditioner`" .  "\n\n" .

            "Status  : " . "\n" . "`Berhasil`" . "\n\n" .

            "Tanggal : " . "\n" . "`" . date('d M Y') . "`" .

            "\n\n" . "*<<<<<<<<<<< WEBTECH >>>>>>>>>>>*";

        $token = "1013071550:AAG4OB8mi2X1_jhOIRlhk7XzN2L1D9w_Rao";

        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?parse_mode=markdown&chat_id=" . $chat_id;
        $ur = $url . "&text=" . urlencode($message);
        $ss = curl_init();
        $arr = array(
            CURLOPT_URL => $ur,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ss, $arr);
        $result = curl_exec($ss);
        curl_close($ss);
        $this->Ac_m->hapus($id);
        var_dump($chat_id, $message, $token);
        redirect('ac');
    }

    public function print()
    {
        $data['data'] = $this->Ac_m->ambil();
        $data['total_apart'] = $this->db->get('tb_ac')->num_rows();

        $this->load->view('ac/print', $data);
    }

    // public function getUpdate()
    // {

    //     $output = array();
    //     $id = $this->input->post('id');
    //     $data = $this->Ac_m->ambil_update($id);

    //     foreach ($data as $row) {
    //         $output['asset'] = $row->asset;
    //         $output['wing'] = $row->wing;
    //         $output['lantai'] = $row->lantai;
    //         $output['lokasi'] = $row->lokasi;
    //         $output['merk'] = $row->merk;
    //         $output['type'] = $row->type;
    //         $output['jenis'] = $row->jenis;
    //         $output['kapasitas'] = $row->kapasitas;
    //         $output['refrigerant'] = $row->refrigerant;
    //         $output['tgl_pemasangan'] = $row->tgl_pemasangan;
    //         $output['tgl_maint'] = $row->tgl_maint;
    //         $output['jenis_kerusakan'] = $row->jenis_kerusakan;
    //         $output['st_kompresor'] = $row->st_kompresor;
    //         $output['status'] = $row->status;
    //         $output['catatan'] = $row->catatan;
    //         $output['tanggal'] = time();
    //     }
    //     echo json_encode($output);
    // }
}