<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lihatlaporan extends CI_Model{
  public function get_lihatlaporan(){
    $sql = "select * from laporan where username='iyuy'";
    $exec = $this->db->query($sql);

    return $exec->result();
  }
}

 ?>
