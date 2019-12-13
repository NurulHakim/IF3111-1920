<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lihat_selengkapnya extends CI_Model{
  public function get_lihat_selengkapnya(){
    $sql = "select * from laporan where username='iyuy'";
    $exec = $this->db->query($sql);

    return $exec->result();
  }
}

 ?>
