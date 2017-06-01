<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('form_login');
	}
	
		function proseslogin(){
			$email_user = $this->input->post('email',true);
			$pass_user = $this->input->post('pass',true);
			$cek = $this->m_login->ceklogin($email_user,$pass_user);
			$tes = count($cek);
			if($tes > 0){
				$data_login = $this->m_login->ceklogin($email_user,$pass_user);
				$level = $data_login->level;
				$data = array('level' => $level);
				$this->session->set_userdata($data);
				if($level == 'admin'){
					redirect('admin');				
				}elseif ($level == 'kepala') {
					redirect('kepala');
				}elseif ($level == 'petugas') {
					redirect('petugas');
				}
			}else{
				$this->session->set_flashdata('result_login', '<br>Email atau Password yang anda masukkan salah.');
                echo "<script>
alert('Username dan password salah');
window.location.href='index';
</script>";
			}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect ('login');
		}
	}

