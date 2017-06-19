<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepala extends CI_Controller {

	
	public function index()
	{
			 // validasi login
	    if (!$this->session->userdata('level')){
	        redirect('login');
	    }else{
	      if ($this->session->userdata('level')!='kepala') {
	        redirect ('validasi_level');
	        # code...
	      }
	    }
		if(!$this->session->userdata('level')){
			redirect('login');
		}else{
			$this->load->view('kepalappm/dashboard_kepala');
		}		
	}
}