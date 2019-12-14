<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_lihat_selengkapnya extends CI_Model
{


  public function get_lihat_selengkapnya()
  {
    $sql = "select * from laporan where username='iyuy'";
    $exec = $this->db->query($sql);

    return $exec->result();
  }

  //public function hapus_laporan($where, $laporan){
  //$sql = "delete from laporan where id_laporan=''";
  //$exec = $this->db->query($sql);

  //return $exec->result();
  //}

  function hapus_laporan($where, $laporan)
  {
    $this->db->where($where);
    $this->db->delete($laporan);
  }

  function edit_laporan($id_laporan, $aspek, $isi_laporan, $lampiran)
  {
    $tanggal = date('Y-m-d');
    // $this->db->where($where);
    // $this->db->update($laporan); $id_laporan, $aspek, $isi_laporan, $lampiran
    $sql = "update laporan set isi_laporan='$isi_laporan' , tanggal='$tanggal',aspek = '$aspek', lampiran = '$lampiran' where id_laporan = '$id_laporan'";
    $exec = $this->db->query($sql);

    return $exec;
    //->result();
  }

  function get_one_laporan($id_laporan)
  {
    $sql = "select * from laporan where id_laporan='$id_laporan'";
    $exec = $this->db->query($sql);

    return $exec->result();
  }
}
