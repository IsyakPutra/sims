<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ujian extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ujian_model');
        $this->load->library(['form_validation','ramalib']);
        $this->load->library('form_validation');
    }

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
        $ujian = $this->Ujian_model->get_all();

        $data = array(
            'ujian_data' => $ujian
        );

        $this->template->load('v_admin','ujian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ujian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_ujian' => $row->id_ujian,
        //'value' => $row->value,
		'siswa' => $row->siswa,
		'guru' => $row->guru,
		'kelas' => $row->kelas,
		'materi' => $row->materi,
		'uas' => $row->uas,
		'nilai' => $row->nilai,
	    );
            $this->template->load('v_admin','ujian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ujian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('ujian/create_action'),
	    'id_ujian' => set_value('id_ujian'),
	    'id_siswa' => set_value('id_siswa'),
	    'id_guru' => set_value('id_guru'),
	    'id_kelas' => set_value('id_kelas'),
	    'id_materi' => set_value('id_materi'),
	    'id_uas' => set_value('id_uas'),
	    'nilai' => set_value('nilai'),
	);
        $this->template->load('v_admin','ujian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_siswa' => $this->input->post('id_siswa',TRUE),
		'id_guru' => $this->input->post('id_guru',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
		'id_materi' => $this->input->post('id_materi',TRUE),
		'id_uas' => $this->input->post('id_uas',TRUE),
		'nilai' => $this->input->post('nilai',TRUE),
	    );

            $this->Ujian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ujian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ujian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('ujian/update_action'),
		'id_ujian' => set_value('id_ujian', $row->id_ujian),
		'id_siswa' => set_value('id_siswa', $row->id_siswa),
		'id_guru' => set_value('id_guru', $row->id_guru),
		'id_kelas' => set_value('id_kelas', $row->id_kelas),
		'id_materi' => set_value('id_materi', $row->id_materi),
		'id_uas' => set_value('id_uas', $row->id_uas),
		'nilai' => set_value('nilai', $row->nilai),
	    );
            $this->template->load('v_admin','ujian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ujian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ujian', TRUE));
        } else {
            $data = array(
		'id_siswa' => $this->input->post('id_siswa',TRUE),
		'id_guru' => $this->input->post('id_guru',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
		'id_materi' => $this->input->post('id_materi',TRUE),
		'id_uas' => $this->input->post('id_uas',TRUE),
		'nilai' => $this->input->post('nilai',TRUE),
	    );

            $this->Ujian_model->update($this->input->post('id_ujian', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ujian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ujian_model->get_by_id($id);

        if ($row) {
            $this->Ujian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ujian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ujian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_siswa', 'id siswa', 'trim|required');
	$this->form_validation->set_rules('id_guru', 'id guru', 'trim|required');
	$this->form_validation->set_rules('id_kelas', 'id kelas', 'trim|required');
	$this->form_validation->set_rules('id_materi', 'id materi', 'trim|required');
	$this->form_validation->set_rules('id_uas', 'id uas', 'trim|required');
	$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');

	$this->form_validation->set_rules('id_ujian', 'id_ujian', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "ujian.xls";
        $judul = "ujian";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Santri");
	xlsWriteLabel($tablehead, $kolomhead++, "Guru Penguji");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");
	xlsWriteLabel($tablehead, $kolomhead++, "Materi Munaqosyah");
	xlsWriteLabel($tablehead, $kolomhead++, "Munaqosyah ke-");
	xlsWriteLabel($tablehead, $kolomhead++, "Nilai");

	foreach ($this->Ujian_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->siswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->guru);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->materi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nilai);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=ujian.doc");

        $data = array(
            'ujian_data' => $this->Ujian_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ujian_doc',$data);
    }

}