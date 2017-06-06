<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->library(['form_validation','ramalib']);
    }

    public function index()
    {
        $guru = $this->Guru_model->get_all();

        $data = array(
            'guru_data' => $guru
        );

        $this->template->load('v_admin','guru_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Guru_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_guru' => $row->id_guru,
		'guru' => $row->guru,
		'nama_panggilan' => $row->nama_panggilan,
		'jenis_kelamin' => $row->jenis_kelamin,
		'tempat_lahir' => $row->tempat_lahir,
		'tanggal_lahir' => $row->tanggal_lahir,
		'tempat_asal' => $row->tempat_asal,
		'kelas' => $row->kelas,
	    );
            $this->template->load('v_admin','guru_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('guru/create_action'),
	    'id_guru' => set_value('id_guru'),
	    'guru' => set_value('guru'),
	    'nama_panggilan' => set_value('nama_panggilan'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    'tempat_asal' => set_value('tempat_asal'),
	    'id_kelas' => set_value('id_kelas'),
	);
        $this->template->load('v_admin','guru_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'guru' => $this->input->post('guru',TRUE),
		'nama_panggilan' => $this->input->post('nama_panggilan',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'tempat_asal' => $this->input->post('tempat_asal',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
	    );
            $this->load->model('nomorinduk_model','nim');
            if ($guru = $this->nim->cekGuru($data['guru'],$data['nama_panggilan'])) {
                $this->session->set_flashdata('message', 'Guru telah ditambahkan dengan nomor induk '.$guru->value);
                redirect(site_url('guru'));
            }

            $id = $this->Guru_model->insert($data);
            $this->ramalib->nomorIndukFor('guru',$id,$data['tanggal_lahir'],$data['nama_panggilan']);
            $this->session->set_flashdata('message', 'Create Record Success');
        }
    }
    
    public function update($id) 
    {
        $row = $this->Guru_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('guru/update_action'),
		'id_guru' => set_value('id_guru', $row->id_guru),
		'guru' => set_value('guru', $row->guru),
		'nama_panggilan' => set_value('nama_panggilan', $row->nama_panggilan),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
		'tempat_asal' => set_value('tempat_asal', $row->tempat_asal),
		'id_kelas' => set_value('id_kelas', $row->id_kelas),
	    );
            $this->template->load('v_admin','guru_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_guru', TRUE));
        } else {
            $data = array(
		'guru' => $this->input->post('guru',TRUE),
		'nama_panggilan' => $this->input->post('nama_panggilan',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'tempat_asal' => $this->input->post('tempat_asal',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
	    );

            $this->Guru_model->update($this->input->post('id_guru', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('guru'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Guru_model->get_by_id($id);

        if ($row) {
            $this->Guru_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('guru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('guru', 'guru', 'trim|required');
	$this->form_validation->set_rules('nama_panggilan', 'nama panggilan', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('tempat_asal', 'tempat asal', 'trim|required');
	$this->form_validation->set_rules('id_kelas', 'id kelas', 'trim|required');

	$this->form_validation->set_rules('id_guru', 'id_guru', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "guru.xls";
        $judul = "guru";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Guru");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Panggilan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kelas");

	foreach ($this->Guru_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->guru);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_panggilan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_asal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kelas);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=guru.doc");

        $data = array(
            'guru_data' => $this->Guru_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('guru_doc',$data);
    }

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-05-26 15:27:43 */
/* http://harviacode.com */