<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	
	public function index()
	{
		if(!$this->session->userdata('level')){
			redirect('login');
		}else{
			$this->load->view('petugasppm/dashboard_petugas');
		}		
	}
}