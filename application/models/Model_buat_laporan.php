<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_buat_laporan extends CI_Model
{
    public function kirim($aspek, $isi_laporan, $tanggal, $lampiran, $username)
    {
        $sql = "Insert into laporan values (null,'$aspek','$isi_laporan','$tanggal','$lampiran','$username')";
        $exec = $this->db->query($sql);

        return $exec;
    }
}
