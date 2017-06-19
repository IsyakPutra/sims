<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		 // validasi login
        if (!$this->session->userdata('level')){
            redirect('login');
        }else{
          if ($this->session->userdata('level')!='admin') {
            redirect ('validasi_level');
            # code...
          }
        }		
		$this->load->view('dashboard_admin');
	}
}
