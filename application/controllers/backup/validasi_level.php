<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class validasi_level extends CI_Controller {

	public function index()
	{
		 // validasi login
	    if (!$this->session->userdata('level')){
	        redirect('login');
	    }else{
	      
	    }
		$this->load->view('v_validasi');
	}

		
	
	}

