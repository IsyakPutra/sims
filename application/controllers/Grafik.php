<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Grafik extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('grafik_model','gm');
    $this->load->library('highcharts');
  }

  public function index(){
    $graph_data['axis']['categories'] = $this->gm->listUas();
    $rerata = [
      'name'=>'UAS',
      'data'=>$this->gm->rerata()
    ];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('Rata-rata Tiap Semester');
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('UAS','Nilai');
    $data = [
      'grafik1'=>$this->highcharts->set_serie($rerata)->render(),
      'uas'=>$this->gm->getUas()
    ];

    $this->template->load('v_admin','v_grafik',$data);
  }

  public function uas($uas){
    $graph_data['axis']['categories'] = $this->gm->listKelas();
    $gender = 'laki_laki';
    $membaca = [
      'name'=>'Membaca',
      'data'=>$this->gm->nilai($gender,$uas,1)
    ];
    $menulis = [
      'name'=>'Menulis',
      'data'=>$this->gm->nilai($gender,$uas,2)
    ];
    $menerangkan = [
      'name'=>'Menerangkan',
      'data'=>$this->gm->nilai($gender,$uas,3)
    ];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('UAS '.$uas.' Putra');
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('Kelas','Nilai');
    $data = [
      'grafik1'=>$this->highcharts->set_serie($membaca)->set_serie($menulis)->set_serie($menerangkan)->render()
    ];
    $graph_data['axis']['categories'] = $this->gm->listKelas();
    $gender = 'perempuan';
    $membaca = [
      'name'=>'Membaca',
      'data'=>$this->gm->nilai($gender,$uas,1)
    ];
    $menulis = [
      'name'=>'Menulis',
      'data'=>$this->gm->nilai($gender,$uas,2)
    ];
    $menerangkan = [
      'name'=>'Menerangkan',
      'data'=>$this->gm->nilai($gender,$uas,3)
    ];
    $arrayKelas = ['Kelas 1','Kelas 2'];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('UAS '.$uas.' Putri');
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('Kelas','Nilai');
    $data = [
      'grafik2'=>$this->highcharts->set_serie($membaca)->set_serie($menulis)->set_serie($menerangkan)->render()
    ];

    $this->template->load('v_admin','v_grafik_uas',$data);
  }

  public function kelas($uas){
    $graph_data['axis']['categories'] = $this->gm->listKelas();
    $membaca = [
      'name'=>'Membaca',
      'data'=>$this->gm->nilaiKelas($uas,1)
    ];
    $menulis = [
      'name'=>'Menulis',
      'data'=>$this->gm->nilaiKelas($uas,2)
    ];
    $menerangkan = [
      'name'=>'Menerangkan',
      'data'=>$this->gm->nilaiKelas($uas,3)
    ];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('UAS '.$uas);
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('Kelas','Nilai');
    $data = [
      'grafik1'=>$this->highcharts->set_serie($membaca)->set_serie($menulis)->set_serie($menerangkan)->render()
    ];
    $this->template->load('v_admin','v_grafik_kelas',$data);
  }
}