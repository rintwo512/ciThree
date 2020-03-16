<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Apart_model');

        cek_login();
        time_zone();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['apar'] = $this->Apart_model->get();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('apart/index', $data);
        $this->load->view('templates/skin');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('aset', 'Aset', 'required');
        $this->form_validation->set_rules('wing', 'Wing', 'required');
        $this->form_validation->set_rules('lantai', 'Lantai', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('no_seri', 'No.seri', 'required');
        $this->form_validation->set_rules('tgl_expire', 'Tanggal Expire', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('apart/index', $data);
            $this->load->view('templates/skin');
            $this->load->view('templates/footer');
        } else {

            $this->Apart_model->insert();
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect('apart');
        }
    }

    public function ubah($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['apart'] = $this->db->get_where('tb_apart', ['id' => $id])->row_array();
        $this->form_validation->set_rules('aset', 'Aset', 'required');
        $this->form_validation->set_rules('wing', 'Wing', 'required');
        $this->form_validation->set_rules('lantai', 'Lantai', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('no_seri', 'No.seri', 'required');
        $this->form_validation->set_rules('tgl_expire', 'Tanggal Expire', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('apart/update', $data);
        } else {

            $chat_id = "-381779502";
            $message = "*<<<<<<<< PESAN OTOMATIS >>>>>>>>*" . "\n\n" .

                "Laporan dari  : "  .  "_" . $this->session->userdata('nama') . "_" . "\n\n" .

                "Opsi  : " . "\n" . "`Update data`" . "\n\n" .

                "Data  :  " . "\n" . "`APART`" .  "\n\n" .

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
            $this->Apart_model->update($id);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            var_dump($chat_id, $message, $token);
            redirect('apart');
        }
    }

    public function hapus($id)
    {

        $query = $this->db->query("SELECT * FROM tb_apart WHERE id = '$id'");

        foreach ($query->result() as $row) {

            echo $aset = $row->aset;
            echo $wing = $row->wing;
            echo $lantai = $row->lantai;
            echo $lokasi = $row->lokasi;
            echo $merk = $row->merk;
            echo $jenis = $row->jenis;
            echo $berat = $row->berat;
            echo $status = $row->status;
            echo $seri = $row->no_seri;
            echo $tgl_expire = $row->tanggal_expire;
        }

        $cob = "Lantai : ";




        $chat_id = "-381779502";
        $message = "*<<<<<<<< PESAN OTOMATIS >>>>>>>>*" . "\n\n" .

            "LAPORAN DARI  : "  .  "_" . $this->session->userdata('nama') . "_" . "\n\n" .

            "OPSI  : " . "\n" . "`Delete data`" . "\n\n" .

            "DETAIL DATA:" . "\n" . "Pemilik Aset  : " . "_ $aset _" . "\n" . "Wing : " . "_ $wing _" . "\n" . $cob . "_ $lantai _" .
            "\n" . "Lokasi : " . "_ $lokasi _" . "\n" . "Merk : " . "_ $merk _" . "\n" . "Jenis : " . "_ $jenis _" . "\n" . "Berat : " . "_ $row->berat _" . "\n" . "Status : " . "_ $status _" . "\n" . "No Seri : " . "_ $seri _" . "\n" . "Tanggal Expire : " . date('d M Y', $tgl_expire) .

            "\n\n" .

            "STATUS  : " . "\n" . "`Berhasil`" . "\n\n" .

            "TANGGAL : " . "\n" . "`" . date('l, d-M-Y', time() + 60 * 60 * 24 * 3) . "`" .

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
        $this->Apart_model->delete($id);
        var_dump($chat_id, $message, $token);
        redirect('apart');
    }

    public function print()
    {
        $data['data'] = $this->Apart_model->get();
        $data['total'] = $this->db->get('tb_apart')->num_rows();
        $this->load->view('apart/print', $data);
    }
}