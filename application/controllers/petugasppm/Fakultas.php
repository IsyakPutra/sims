<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class fakultas extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('petugasppm/fakultas_model');
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
        $fakultas = $this->fakultas_model->get_all();

        $data = array(
            'fakultas_data' => $fakultas
        );

        $this->template->load('petugasppm/v_petugas','petugasppm/fakultas_list', $data);
    }

    public function read($id) 
    {
        $row = $this->fakultas_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id_fakultas' => $row->id_fakultas,
        'fakultas' => $row->fakultas,
        );
            $this->template->load('petugasppm/v_petugas','petugasppm/fakultas_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('petugasppm/fakultas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('petugasppm/fakultas/create_action'),
        'id_fakultas' => set_value('id_fakultas'),
        'fakultas' => set_value('fakultas'),
    );
        $this->template->load('petugasppm/v_petugas','petugasppm/fakultas_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'fakultas' => $this->input->post('fakultas',TRUE),
        );

            $this->fakultas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('petugasppm/fakultas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->fakultas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('petugasppm/fakultas/update_action'),
        'id_fakultas' => set_value('id_fakultas', $row->id_fakultas),
        'fakultas' => set_value('fakultas', $row->fakultas),
        );
            $this->template->load('petugasppm/v_petugas','petugasppm/fakultas_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('petugasppm/fakultas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_fakultas', TRUE));
        } else {
            $data = array(
        'fakultas' => $this->input->post('fakultas',TRUE),
        );

            $this->fakultas_model->update($this->input->post('id_fakultas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('petugasppm/fakultas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->fakultas_model->get_by_id($id);

        if ($row) {
            $this->fakultas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('petugasppm/fakultas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('petugasppm/fakultas'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('fakultas', 'fakultas', 'trim|required');

    $this->form_validation->set_rules('id_fakultas', 'id_fakultas', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    function pdf()
    {
        $data = array(
            'fakultas_data' => $this->fakultas_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('fakultas_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('fakultas.pdf', 'D'); 
    }

}
