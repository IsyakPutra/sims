<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Universitas extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Universitas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $universitas = $this->Universitas_model->get_all();

        $data = array(
            'universitas_data' => $universitas
        );

        $this->template->load('template','universitas_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Universitas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_universitas' => $row->id_universitas,
		'universitas' => $row->universitas,
	    );
            $this->template->load('template','universitas_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('universitas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('universitas/create_action'),
	    'id_universitas' => set_value('id_universitas'),
	    'universitas' => set_value('universitas'),
	);
        $this->template->load('template','universitas_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_universitas' => $this->input->post('id_universitas',TRUE),
		'universitas' => $this->input->post('universitas',TRUE),
	    );

            $this->Universitas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('universitas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Universitas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('universitas/update_action'),
		'id_universitas' => set_value('id_universitas', $row->id_universitas),
		'universitas' => set_value('universitas', $row->universitas),
	    );
            $this->template->load('template','universitas_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('universitas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'id_universitas' => $this->input->post('id_universitas',TRUE),
		'universitas' => $this->input->post('universitas',TRUE),
	    );

            $this->Universitas_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('universitas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Universitas_model->get_by_id($id);

        if ($row) {
            $this->Universitas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('universitas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('universitas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_universitas', 'id universitas', 'trim|required');
	$this->form_validation->set_rules('universitas', 'universitas', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "universitas.xls";
        $judul = "universitas";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Universitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Universitas");

	foreach ($this->Universitas_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_universitas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->universitas);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=universitas.doc");

        $data = array(
            'universitas_data' => $this->Universitas_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('universitas_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'universitas_data' => $this->Universitas_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('universitas_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('universitas.pdf', 'D'); 
    }

}

/* End of file Universitas.php */
/* Location: ./application/controllers/Universitas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-05-20 07:29:30 */
/* http://harviacode.com */