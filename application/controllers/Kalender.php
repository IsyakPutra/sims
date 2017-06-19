<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Kalender extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('kalender_model','km');
    $this->load->library('form_validation');
  }

  public function index(){
    // validasi login
        if (!$this->session->userdata('level')){
            redirect('login');
        }else{
          if ($this->session->userdata('level')!='admin') {
            redirect ('validasi_level');
            # code...
          }
        }
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data = [
        'judul_kegiatan'=>$this->input->post('judul'),
        'tanggal_kegiatan'=>$this->input->post('waktu')
      ];

      $this->km->add($data);
    }

    $data = [
      'data'=>$this->km->agenda()
    ];
    
    $this->template->load('v_admin','v_kalender',$data);
  }

  public function edit($id){
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data = [
        'judul_kegiatan'=>$this->input->post('judul'),
        'tanggal_kegiatan'=>$this->input->post('waktu')
      ];

      $this->km->update($id,$data);

      redirect('kalender','refresh');
    }

    $data = [
      'data'=>$this->km->agenda(),
      'detail'=>$this->km->find($id)
    ];

    $this->template->load('v_admin','v_kalender',$data);
  }

  public function delete($id){
    $this->km->delete($id);

    redirect('kalender','refresh');
  }
}