<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_laporan extends CI_Model
{
  public function get_laporan_teratas()
  {
    $sql = "select * from laporan order by tanggal desc";
    $exec = $this->db->query($sql);

    return $exec->result();
  }

  public function get_laporan_lain($x)
  {
    $sql = "select * from laporan order by tanggal desc limit 3 offset $x";
    $exec = $this->db->query($sql);



    return $exec->result();
  }
}
