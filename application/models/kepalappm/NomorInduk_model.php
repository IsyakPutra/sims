<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class NomorInduk_model extends CI_Model {
  public function cekKelasSiswa($id){
    return $this->db->select('kelas')->get_where('kelas',array('id_kelas'=>$id))->row();
  }

  public function add($data,$member){
    $this->db->insert('nomor_induk_'.$member,$data);
  }

  public function cekGuru($nama,$panggilan){
    if ($guru = $this->db->select('id_guru')->where('guru',$nama)->where('nama_panggilan',$panggilan)->get('guru')->row()) {
      return $this->db->select('value')->where('guru_id',$guru->id_guru)->get('nomor_induk_guru')->row();
    }
  }

  public function cekSiswa($nama,$panggilan){
    if ($siswa = $this->db->select('id_siswa')->where('siswa',$nama)->where('nama_panggilan',$panggilan)->get('siswa')->row()) {
      return $this->db->select('value')->where('siswa_id',$siswa->id_siswa)->get('nomor_induk_siswa')->row();
    }
  }
}