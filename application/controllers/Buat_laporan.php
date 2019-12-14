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
        echo $aspek;
        $isi_laporan = $this->input->post('Komentar');
        $username = "iyuy";
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);



        $this->upload->do_upload('lampiran');
        echo $this->upload->display_errors();
        $lampiran = $this->upload->data('file_name');
        var_dump($lampiran);

        $this->load->model('Model_buat_laporan');
        //$aspek,$isi_laporan,$tanggal,$lampiran,$username
        if ($this->Model_buat_laporan->kirim($aspek, $isi_laporan, "1990-12-12", $lampiran, $username)) {

            redirect('Utama/index');
        }
    }
}
