<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwalku extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwalku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $jadwalku = $this->Jadwalku_model->get_all();

        $data = array(
            'jadwalku_data' => $jadwalku
        );

        $this->template->load('template','jadwalku_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Jadwalku_model->get_by_id($id);
        if ($row) {
            $data = array(
		'jadwal_id' => $row->jadwal_id,
		'tgl1' => $row->tgl1,
		'tgl2' => $row->tgl2,
		'judul' => $row->judul,
	    );
            $this->template->load('template','jadwalku_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalku'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jadwalku/create_action'),
	    'jadwal_id' => set_value('jadwal_id'),
	    'tgl1' => set_value('tgl1'),
	    'tgl2' => set_value('tgl2'),
	    'judul' => set_value('judul'),
	);
        $this->template->load('template','jadwalku_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl1' => $this->input->post('tgl1',TRUE),
		'tgl2' => $this->input->post('tgl2',TRUE),
		'judul' => $this->input->post('judul',TRUE),
	    );

            $this->Jadwalku_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jadwalku'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jadwalku_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwalku/update_action'),
		'jadwal_id' => set_value('jadwal_id', $row->jadwal_id),
		'tgl1' => set_value('tgl1', $row->tgl1),
		'tgl2' => set_value('tgl2', $row->tgl2),
		'judul' => set_value('judul', $row->judul),
	    );
            $this->template->load('template','jadwalku_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalku'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('jadwal_id', TRUE));
        } else {
            $data = array(
		'tgl1' => $this->input->post('tgl1',TRUE),
		'tgl2' => $this->input->post('tgl2',TRUE),
		'judul' => $this->input->post('judul',TRUE),
	    );

            $this->Jadwalku_model->update($this->input->post('jadwal_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jadwalku'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jadwalku_model->get_by_id($id);

        if ($row) {
            $this->Jadwalku_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jadwalku'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalku'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl1', 'tgl1', 'trim|required');
	$this->form_validation->set_rules('tgl2', 'tgl2', 'trim|required');
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');

	$this->form_validation->set_rules('jadwal_id', 'jadwal_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "jadwalku.xls";
        $judul = "jadwalku";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl1");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl2");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");

	foreach ($this->Jadwalku_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=jadwalku.doc");

        $data = array(
            'jadwalku_data' => $this->Jadwalku_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jadwalku_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'jadwalku_data' => $this->Jadwalku_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('jadwalku_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('jadwalku.pdf', 'D'); 
    }

}

/* End of file Jadwalku.php */
/* Location: ./application/controllers/Jadwalku.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-05-20 07:29:29 */
/* http://harviacode.com */