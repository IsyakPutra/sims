<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Grafik extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('kepalappm/grafik_model','gm');
    $this->load->library('highcharts');

    
  }

  public function index(){
    // validasi login
    if (!$this->session->userdata('level')){
        redirect('login');
    }else{
      if ($this->session->userdata('level')!='kepala') {
        redirect ('validasi_level');
        # code...
      }
    }


    $graph_data['axis']['categories'] = $this->gm->listUas();
    $rerata = [
      'name'=>'UAS',
      'data'=>$this->gm->rerata()
    ];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('Rata-rata Tiap Semester');
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('Munaqosyah','Nilai');
    $data = [
      'grafik1'=>$this->highcharts->set_serie($rerata)->render(),
      'uas'=>$this->gm->getUas()
    ];

    $this->template->load('kepalappm/v_kepala','kepalappm/v_grafik',$data);
  }

  public function uas($uas){
    $graph_data['axis']['categories'] = $this->gm->listKelas();
    $gender = 'Laki - laki';
    $membaca = [
      'name'=>'Syafahi (Ujian Lisan)',
      'data'=>$this->gm->nilai($gender,$uas,1)
    ];
    $menulis = [
      'name'=>'Tahriri (Ujian Tulis)',
      'data'=>$this->gm->nilai($gender,$uas,2)
    ];
    $menerangkan = [
      'name'=>'Praktik Ibadah (Qauliyah dan Amaliyah)',
      'data'=>$this->gm->nilai($gender,$uas,3)
    ];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('Munaqosyah '.$uas.' Putra');
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('Kelas','Nilai');
    $data = [
      'grafik1'=>$this->highcharts->set_serie($membaca)->set_serie($menulis)->set_serie($menerangkan)->render()
    ];
    $graph_data['axis']['categories'] = $this->gm->listKelas();
    $gender = 'perempuan';
    $membaca = [
      'name'=>'Syafahi (Ujian Lisan)',
      'data'=>$this->gm->nilai($gender,$uas,1)
    ];
    $menulis = [
      'name'=>'Tahriri (Ujian Tulis)',
      'data'=>$this->gm->nilai($gender,$uas,2)
    ];
    $menerangkan = [
      'name'=>'Praktik Ibadah (Qauliyah dan Amaliyah)',
      'data'=>$this->gm->nilai($gender,$uas,3)
    ];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('Munaqosyah '.$uas.' Putri');
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('Kelas','Nilai');
    $data = [
      'grafik2'=>$this->highcharts->set_serie($membaca)->set_serie($menulis)->set_serie($menerangkan)->render()
    ];

    $this->template->load('kepalappm/v_kepala','kepalappm/v_grafik_uas',$data);
  }

  public function kelas($uas){
    $graph_data['axis']['categories'] = $this->gm->listKelas();
    $membaca = [
      'name'=>'Syafahi (Ujian Lisan)',
      'data'=>$this->gm->nilaiKelas($uas,1)
    ];
    $menulis = [
      'name'=>'Tahriri (Ujian Tulis)',
      'data'=>$this->gm->nilaiKelas($uas,2)
    ];
    $menerangkan = [
      'name'=>'Praktik Ibadah (Qauliyah dan Amaliyah)',
      'data'=>$this->gm->nilaiKelas($uas,3)
    ];
    $this->highcharts->set_type('column');
    $this->highcharts->set_title('Munaqosyah'.$uas);
    $this->highcharts->set_xAxis($graph_data['axis']);
    $this->highcharts->set_axis_titles('Kelas','Nilai');
    $data = [
      'grafik1'=>$this->highcharts->set_serie($membaca)->set_serie($menulis)->set_serie($menerangkan)->render()
    ];
    $this->template->load('kepalappm/v_kepala','kepalappm/v_grafik_kelas',$data);
  }
}