<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Grafik_model extends CI_Model {
  public function getUas(){
    return $this->db->get('uas')->result();
  }

  public function nilai($gender,$uas,$materi){
    $query = $this->db->select('AVG(ujian.nilai) as nilai')
      ->join('materi','ujian.id_materi=materi.id_materi','left')
      ->join('kelas','ujian.id_kelas=kelas.id_kelas','left')
      ->join('siswa','ujian.id_siswa=siswa.id_siswa','left')
      ->join('uas','ujian.id_uas=uas.id_uas','left')
      ->where('siswa.jenis_kelamnin',$gender)
      ->where('uas.id_uas',$uas)
      ->where('materi.id_materi',$materi)
      ->group_by('ujian.id_kelas')
      ->order_by('ujian.id_kelas')
      ->get('ujian')
      ->result_array();

    if (empty($query)) {
      return null;
    }

    foreach ($query as $row) {
      $data[] = $row['nilai'];
    }

    return $data;
  }

  public function listKelas(){
    $query = $this->db->get('kelas')->result_array();

    foreach ($query as $row) {
      $data[] = $row['kelas'];
    }

    return $data;
  }

  public function listUas(){
    $query = $this->db->get('uas')->result_array();
    
    foreach ($query as $row) {
      $data[] = $row['uas'];
    }
    
    return $data;
  }

  public function nilaiKelas($uas,$materi){
    $query = $this->db->select('AVG(ujian.nilai) as nilai')
      ->join('materi','ujian.id_materi=materi.id_materi','left')
      ->join('kelas','ujian.id_kelas=kelas.id_kelas','left')
      ->join('siswa','ujian.id_siswa=siswa.id_siswa','left')
      ->join('uas','ujian.id_uas=uas.id_uas','left')
      ->where('uas.id_uas',$uas)
      ->where('materi.id_materi',$materi)
      ->group_by('ujian.id_kelas')
      ->order_by('ujian.id_kelas')
      ->get('ujian')
      ->result_array();

    if (empty($query)) {
      return null;
    }

    foreach ($query as $row) {
      $data[] = $row['nilai'];
    }

    return $data;
  }

  public function rerata(){
    $query = $this->db->select('AVG(ujian.nilai) as nilai')
      ->join('materi','ujian.id_materi=materi.id_materi','left')
      ->join('kelas','ujian.id_kelas=kelas.id_kelas','left')
      ->join('siswa','ujian.id_siswa=siswa.id_siswa','left')
      ->join('uas','ujian.id_uas=uas.id_uas','left')
      ->group_by('uas.id_uas')
      ->order_by('ujian.id_kelas')
      ->get('ujian')
      ->result_array();

    if (empty($query)) {
      return null;
    }

    foreach ($query as $row) {
      $data[] = $row['nilai'];
    }

    return $data;
  }
}