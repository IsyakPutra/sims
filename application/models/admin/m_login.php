<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	
	public function ceklogin($email, $pass)
	{
		
		$this->db->where('email',$email);
		$this->db->where('password',$pass );
		return $this->db->get('user')->row();
		}
	}

