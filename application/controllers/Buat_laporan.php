<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Buat_laporan extends CI_Controller
{
    public function index()
    {
        $this->load->view('Buat_laporan/Buat_Laporan');
    }

    public function kirim_L()
    {
        $aspek = $this->input->post('aspek');
        $isi_laporan = $this->input->post('Komentar');
        $username = "iyuy";
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|doc|docx|xls|xlxs|ppt|pptx|pdf'; //doc, docx, xls, xlsx, ppt, pptx, pdf
        $this->load->library('upload', $config);

        $tanggal = date('Y-m-d');

        $this->upload->do_upload('lampiran');
        echo $this->upload->display_errors();
        $lampiran = $this->upload->data('file_name');

        $this->load->model('Model_buat_laporan');
        //$aspek,$isi_laporan,$tanggal,$lampiran,$username
        if ($this->Model_buat_laporan->kirim($aspek, $isi_laporan, $tanggal, $lampiran, $username)) {

            redirect('Utama/index');
        }
    }
}
