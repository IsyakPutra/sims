<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chart extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mchart');
    }
    
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
        $data['report'] = $this->mchart->report();
        $this->load->view('report', $data);
    }
}