<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $nilai = $this->Nilai_model->get_all();

        $data = array(
            'nilai_data' => $nilai
        );

        $this->template->load('v_admin','nilai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Nilai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_siswa' => $row->id_siswa,
		'nama_siswa' => $row->nama_siswa,
		'kelas' => $row->kelas,
		'membaca' => $row->membaca,
		'memaknai' => $row->memaknai,
		'menerangkan' => $row->menerangkan,
		'uas1' => $row->uas1,
		'uas2' => $row->uas2,
		'uas3' => $row->uas3,
		'uas4' => $row->uas4,
		'uas5' => $row->uas5,
		'uas6' => $row->uas6,
		'uas7' => $row->uas7,
		'uas8' => $row->uas8,
	    );
            $this->template->load('template','nilai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('nilai/create_action'),
	    'id_siswa' => set_value('id_siswa'),
	    'nama_siswa' => set_value('nama_siswa'),
	    'kelas' => set_value('kelas'),
	    'membaca' => set_value('membaca'),
	    'memaknai' => set_value('memaknai'),
	    'menerangkan' => set_value('menerangkan'),
	    'uas1' => set_value('uas1'),
	    'uas2' => set_value('uas2'),
	    'uas3' => set_value('uas3'),
	    'uas4' => set_value('uas4'),
	    'uas5' => set_value('uas5'),
	    'uas6' => set_value('uas6'),
	    'uas7' => set_value('uas7'),
	    'uas8' => set_value('uas8'),
	);
        $this->template->load('template','nilai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_siswa' => $this->input->post('id_siswa',TRUE),
		'nama_siswa' => $this->input->post('nama_siswa',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'membaca' => $this->input->post('membaca',TRUE),
		'memaknai' => $this->input->post('memaknai',TRUE),
		'menerangkan' => $this->input->post('menerangkan',TRUE),
		'uas1' => $this->input->post('uas1',TRUE),
		'uas2' => $this->input->post('uas2',TRUE),
		'uas3' => $this->input->post('uas3',TRUE),
		'uas4' => $this->input->post('uas4',TRUE),
		'uas5' => $this->input->post('uas5',TRUE),
		'uas6' => $this->input->post('uas6',TRUE),
		'uas7' => $this->input->post('uas7',TRUE),
		'uas8' => $this->input->post('uas8',TRUE),
	    );

            $this->Nilai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('nilai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Nilai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('nilai/update_action'),
		'id_siswa' => set_value('id_siswa', $row->id_siswa),
		'nama_siswa' => set_value('nama_siswa', $row->nama_siswa),
		'kelas' => set_value('kelas', $row->kelas),
		'membaca' => set_value('membaca', $row->membaca),
		'memaknai' => set_value('memaknai', $row->memaknai),
		'menerangkan' => set_value('menerangkan', $row->menerangkan),
		'uas1' => set_value('uas1', $row->uas1),
		'uas2' => set_value('uas2', $row->uas2),
		'uas3' => set_value('uas3', $row->uas3),
		'uas4' => set_value('uas4', $row->uas4),
		'uas5' => set_value('uas5', $row->uas5),
		'uas6' => set_value('uas6', $row->uas6),
		'uas7' => set_value('uas7', $row->uas7),
		'uas8' => set_value('uas8', $row->uas8),
	    );
            $this->template->load('template','nilai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'id_siswa' => $this->input->post('id_siswa',TRUE),
		'nama_siswa' => $this->input->post('nama_siswa',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'membaca' => $this->input->post('membaca',TRUE),
		'memaknai' => $this->input->post('memaknai',TRUE),
		'menerangkan' => $this->input->post('menerangkan',TRUE),
		'uas1' => $this->input->post('uas1',TRUE),
		'uas2' => $this->input->post('uas2',TRUE),
		'uas3' => $this->input->post('uas3',TRUE),
		'uas4' => $this->input->post('uas4',TRUE),
		'uas5' => $this->input->post('uas5',TRUE),
		'uas6' => $this->input->post('uas6',TRUE),
		'uas7' => $this->input->post('uas7',TRUE),
		'uas8' => $this->input->post('uas8',TRUE),
	    );

            $this->Nilai_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('nilai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Nilai_model->get_by_id($id);

        if ($row) {
            $this->Nilai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nilai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_siswa', 'id siswa', 'trim|required');
	$this->form_validation->set_rules('nama_siswa', 'nama siswa', 'trim|required');
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('membaca', 'membaca', 'trim|required');
	$this->form_validation->set_rules('memaknai', 'memaknai', 'trim|required');
	$this->form_validation->set_rules('menerangkan', 'menerangkan', 'trim|required');
	$this->form_validation->set_rules('uas1', 'uas1', 'trim|required');
	$this->form_validation->set_rules('uas2', 'uas2', 'trim|required');
	$this->form_validation->set_rules('uas3', 'uas3', 'trim|required');
	$this->form_validation->set_rules('uas4', 'uas4', 'trim|required');
	$this->form_validation->set_rules('uas5', 'uas5', 'trim|required');
	$this->form_validation->set_rules('uas6', 'uas6', 'trim|required');
	$this->form_validation->set_rules('uas7', 'uas7', 'trim|required');
	$this->form_validation->set_rules('uas8', 'uas8', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "nilai.xls";
        $judul = "nilai";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Siswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Siswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");
	xlsWriteLabel($tablehead, $kolomhead++, "Membaca");
	xlsWriteLabel($tablehead, $kolomhead++, "Memaknai");
	xlsWriteLabel($tablehead, $kolomhead++, "Menerangkan");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas1");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas2");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas3");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas4");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas5");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas6");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas7");
	xlsWriteLabel($tablehead, $kolomhead++, "Uas8");

	foreach ($this->Nilai_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_siswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_siswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas);
	    xlsWriteNumber($tablebody, $kolombody++, $data->membaca);
	    xlsWriteNumber($tablebody, $kolombody++, $data->memaknai);
	    xlsWriteNumber($tablebody, $kolombody++, $data->menerangkan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas1);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas2);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas3);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas4);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas5);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas6);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas7);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uas8);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=nilai.doc");

        $data = array(
            'nilai_data' => $this->Nilai_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('nilai_doc',$data);
    }

}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-05-24 17:08:35 */
/* http://harviacode.com */