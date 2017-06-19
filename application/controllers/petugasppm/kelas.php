<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('petugasppm/Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
             // validasi login
        if (!$this->session->userdata('level')){
            redirect('login');
        }else{
          if ($this->session->userdata('level')!='petugas') {
            redirect ('validasi_level');
            # code...
          }
        }
        $kelas = $this->Kelas_model->get_all();

        $data = array(
            'kelas_data' => $kelas
        );

        $this->template->load('petugasppm/v_petugas','petugasppm/kelas_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kelas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kelas' => $row->id_kelas,
		'kelas' => $row->kelas,
	    );
            $this->template->load('petugasppm/v_petugas','petugasppm/kelas_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('petugasppm/kelas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('petugasppm/kelas/create_action'),
	    'id_kelas' => set_value('id_kelas'),
	    'kelas' => set_value('kelas'),
	);
        $this->template->load('petugasppm/v_petugas','petugasppm/kelas_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kelas' => $this->input->post('kelas',TRUE),
	    );

            $this->Kelas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('petugasppm/kelas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kelas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('petugasppm/kelas/update_action'),
		'id_kelas' => set_value('id_kelas', $row->id_kelas),
		'kelas' => set_value('kelas', $row->kelas),
	    );
            $this->template->load('petugasppm/v_petugas','petugasppm/kelas_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('petugasppm/kelas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kelas', TRUE));
        } else {
            $data = array(
		'kelas' => $this->input->post('kelas',TRUE),
	    );

            $this->Kelas_model->update($this->input->post('id_kelas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('petugasppm/kelas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kelas_model->get_by_id($id);

        if ($row) {
            $this->Kelas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('petugasppm/kelas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('petugasppm/kelas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');

	$this->form_validation->set_rules('id_kelas', 'id_kelas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kelas.xls";
        $judul = "kelas";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");

	foreach ($this->Kelas_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kelas.doc");

        $data = array(
            'kelas_data' => $this->Kelas_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kelas_doc',$data);
    }

}
