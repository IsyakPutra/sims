<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RamaLib {
  protected $ci;

  public function __construct(){
    $this->ci =& get_instance();
  }

  public function nomorIndukFor($member,$id,$tahun,$kelas){
    $this->ci->load->model('nomorinduk_model','nim');
    if ($member == 'siswa') {
      $kelas = $this->ci->nim->cekKelasSiswa($kelas);
      $data = [
        'value'=>substr($tahun,0,2).''.substr($kelas->kelas,0,1).''.$id,
        'siswa_id'=>$id
      ];
      $this->ci->nim->add($data,$member);
    } elseif ($member == 'guru') {
      $data = [
        'value'=>substr($tahun,2,2).''.substr($kelas,0,1).''.$id,
        'guru_id'=>$id
      ];
      $this->ci->nim->add($data,$member);
    }
  }
}