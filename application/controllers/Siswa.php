<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->library(['form_validation','ramalib']);
    }

    public function index()
    {
        $siswa = $this->Siswa_model->get_all();

        $data = array(
            'siswa_data' => $siswa
        );

        $this->template->load('v_admin','siswa_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Siswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_siswa' => $row->id_siswa,
		'value' => $row->value,
		'siswa' => $row->siswa,
		'nama_panggilan' => $row->nama_panggilan,
		'tempat_lahir' => $row->tempat_lahir,
		'tanggal_lahir' => $row->tanggal_lahir,
		// 'umur' => $row->umur,
		'jenis_kelamnin' => $row->jenis_kelamnin,
		'golongan_darah' => $row->golongan_darah,
		'no_hp' => $row->no_hp,
		'alamat' => $row->alamat,
		'provinsi' => $row->provinsi,
		'kabupaten' => $row->kabupaten,
		'kecamatan' => $row->kecamatan,
		'nama_ayah' => $row->nama_ayah,
		'pekerjaan_ayah' => $row->pekerjaan_ayah,
		'nama_ibu' => $row->nama_ibu,
		'pekerjaan_ibu' => $row->pekerjaan_ibu,
		'jumlah_saudara' => $row->jumlah_saudara,
		'urutan' => $row->urutan,
		'id_universitas' => $row->universitas,
		'id_fakultas' => $row->fakultas,
		// 'id_jurusan' => $row->id_jurusan,
		'id_jurusan' => $row->jurusan,
		'tahun_masuk_universitas' => $row->tahun_masuk_universitas,
		'tahun_masuk_ppm' => $row->tahun_masuk_ppm,
		'id_kelas' => $row->kelas,
	    );
            $this->template->load('v_admin','siswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('siswa/create_action'),
	    'id_siswa' => set_value('id_siswa'),
	    'value' => set_value('value'),	    
	    'siswa' => set_value('siswa'),
	    'nama_panggilan' => set_value('nama_panggilan'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    // 'umur' => set_value('umur'),
	    'jenis_kelamnin' => set_value('jenis_kelamnin'),
	    'golongan_darah' => set_value('golongan_darah'),
	    'no_hp' => set_value('no_hp'),
	    'alamat' => set_value('alamat'),
	    'provinsi' => set_value('provinsi'),
	    'kabupaten' => set_value('kabupaten'),
	    'kecamatan' => set_value('kecamatan'),
	    'nama_ayah' => set_value('nama_ayah'),
	    'pekerjaan_ayah' => set_value('pekerjaan_ayah'),
	    'nama_ibu' => set_value('nama_ibu'),
	    'pekerjaan_ibu' => set_value('pekerjaan_ibu'),
	    'jumlah_saudara' => set_value('jumlah_saudara'),
	    'urutan' => set_value('urutan'),
	    'id_universitas' => set_value('id_universitas'),
	    'id_fakultas' => set_value('id_fakultas'),
	    'id_jurusan' => set_value('id_jurusan'),
	    'tahun_masuk_universitas' => set_value('tahun_masuk_universitas'),
	    'tahun_masuk_ppm' => set_value('tahun_masuk_ppm'),
	    'id_kelas' => set_value('id_kelas'),
	);
        $this->template->load('v_admin','siswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->load->library('form_validation');

        if ($this->form_validation->run('create') == FALSE) {
            $this->create();
        } else {
            $data = array(
			    // 'value' => $this->input->post('value',TRUE),
				'siswa' => $this->input->post('siswa',TRUE),
				'nama_panggilan' => $this->input->post('nama_panggilan',TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
				// 'umur' => $this->input->post('umur',TRUE),
				'jenis_kelamnin' => $this->input->post('jenis_kelamnin',TRUE),
				'golongan_darah' => $this->input->post('golongan_darah',TRUE),
				'no_hp' => $this->input->post('no_hp',TRUE),
				'alamat' => $this->input->post('alamat',TRUE),
				'provinsi' => $this->input->post('provinsi',TRUE),
				'kabupaten' => $this->input->post('kabupaten',TRUE),
				'kecamatan' => $this->input->post('kecamatan',TRUE),
				'nama_ayah' => $this->input->post('nama_ayah',TRUE),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah',TRUE),
				'nama_ibu' => $this->input->post('nama_ibu',TRUE),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu',TRUE),
				'jumlah_saudara' => $this->input->post('jumlah_saudara',TRUE),
				'urutan' => $this->input->post('urutan',TRUE),
				'id_universitas' => $this->input->post('id_universitas',TRUE),
				'id_fakultas' => $this->input->post('id_fakultas',TRUE),
				'id_jurusan' => $this->input->post('id_jurusan',TRUE),
				'tahun_masuk_universitas' => $this->input->post('tahun_masuk_universitas',TRUE),
				'tahun_masuk_ppm' => $this->input->post('tahun_masuk_ppm',TRUE),
				'id_kelas' => $this->input->post('id_kelas',TRUE),
		    );
            $this->load->model('nomorinduk_model','nim');
            if ($siswa = $this->nim->cekSiswa($data['siswa'],$data['nama_panggilan'])) {
                $this->session->set_flashdata('message', 'Siswa sudah ada! dengan NIS : '.$siswa->value);
                redirect(site_url('siswa'));
            }

            $id = $this->Siswa_model->insert($data);
            $this->ramalib->nomorIndukFor('siswa',$id,$data['tahun_masuk_ppm'],$data['id_kelas']);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('siswa'));
    	
    	$this->load->view('siswa_list');
        }
    }
    
    public function update($id) 
    {
        $row = $this->Siswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('siswa/update_action'),
				'value' => set_value('value', $row->value),
				'id_siswa' => set_value('id_siswa', $row->id_siswa),
				'siswa' => set_value('siswa', $row->siswa),
				'nama_panggilan' => set_value('nama_panggilan', $row->nama_panggilan),
				'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
				'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
				// 'umur' => set_value('umur', $row->umur),
				'jenis_kelamnin' => set_value('jenis_kelamnin', $row->jenis_kelamnin),
				'golongan_darah' => set_value('golongan_darah', $row->golongan_darah),
				'no_hp' => set_value('no_hp', $row->no_hp),
				'alamat' => set_value('alamat', $row->alamat),
				'provinsi' => set_value('provinsi', $row->provinsi),
				'kabupaten' => set_value('kabupaten', $row->kabupaten),
				'kecamatan' => set_value('kecamatan', $row->kecamatan),
				'nama_ayah' => set_value('nama_ayah', $row->nama_ayah),
				'pekerjaan_ayah' => set_value('pekerjaan_ayah', $row->pekerjaan_ayah),
				'nama_ibu' => set_value('nama_ibu', $row->nama_ibu),
				'pekerjaan_ibu' => set_value('pekerjaan_ibu', $row->pekerjaan_ibu),
				'jumlah_saudara' => set_value('jumlah_saudara', $row->jumlah_saudara),
				'urutan' => set_value('urutan', $row->urutan),
				'id_universitas' => set_value('id_universitas', $row->id_universitas),
				'id_fakultas' => set_value('id_fakultas', $row->id_fakultas),
				'id_jurusan' => set_value('id_jurusan', $row->id_jurusan),
				'tahun_masuk_universitas' => set_value('tahun_masuk_universitas', $row->tahun_masuk_universitas),
				'tahun_masuk_ppm' => set_value('tahun_masuk_ppm', $row->tahun_masuk_ppm),
				'id_kelas' => set_value('id_kelas', $row->id_kelas),
	    	);
            	$this->template->load('v_admin','siswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siswa'));
        }
    }
    
    public function update_action() 
    {
        // $this->_rules();
        $this->load->library('form_validation');
         if ($this->form_validation->run('edit') == FALSE) {
            $this->update($this->input->post('id_siswa', TRUE));

        // if ($this->form_validation->run('edit') == FALSE) {
        //     $this->update($this->input->post('id_siswa', TRUE));
        } else {
            $data = array(
				'siswa' => $this->input->post('siswa',TRUE),
				'nama_panggilan' => $this->input->post('nama_panggilan',TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
				// 'umur' => $this->input->post('umur',TRUE),
				'jenis_kelamnin' => $this->input->post('jenis_kelamnin',TRUE),
				'golongan_darah' => $this->input->post('golongan_darah',TRUE),
				'no_hp' => $this->input->post('no_hp',TRUE),
				'alamat' => $this->input->post('alamat',TRUE),
				'provinsi' => $this->input->post('provinsi',TRUE),
				'kabupaten' => $this->input->post('kabupaten',TRUE),
				'kecamatan' => $this->input->post('kecamatan',TRUE),
				'nama_ayah' => $this->input->post('nama_ayah',TRUE),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah',TRUE),
				'nama_ibu' => $this->input->post('nama_ibu',TRUE),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu',TRUE),
				'jumlah_saudara' => $this->input->post('jumlah_saudara',TRUE),
				'urutan' => $this->input->post('urutan',TRUE),
				'id_universitas' => $this->input->post('id_universitas',TRUE),
				'id_fakultas' => $this->input->post('id_fakultas',TRUE),
				'id_jurusan' => $this->input->post('id_jurusan',TRUE),
				'tahun_masuk_universitas' => $this->input->post('tahun_masuk_universitas',TRUE),
				'tahun_masuk_ppm' => $this->input->post('tahun_masuk_ppm',TRUE),
				'id_kelas' => $this->input->post('id_kelas',TRUE),
			    );

            $this->Siswa_model->update($this->input->post('id_siswa', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('siswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Siswa_model->get_by_id($id);

        if ($row) {
            $this->Siswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('siswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siswa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('siswa', 'siswa', 'trim|required');
	$this->form_validation->set_rules('nama_panggilan', 'nama panggilan', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	// $this->form_validation->set_rules('umur', 'umur', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamnin', 'jenis kelamnin', 'trim|required');
	$this->form_validation->set_rules('golongan_darah', 'golongan darah', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
	$this->form_validation->set_rules('kabupaten', 'kabupaten', 'trim|required');
	$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
	$this->form_validation->set_rules('nama_ayah', 'nama ayah', 'trim|required');
	$this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan ayah', 'trim|required');
	$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'trim|required');
	$this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan ibu', 'trim|required');
	$this->form_validation->set_rules('jumlah_saudara', 'jumlah saudara', 'trim|required');
	$this->form_validation->set_rules('urutan', 'urutan', 'trim|required');
	$this->form_validation->set_rules('id_universitas', 'id universitas', 'trim|required');
	$this->form_validation->set_rules('id_fakultas', 'id fakultas', 'trim|required');
	$this->form_validation->set_rules('id_jurusan', 'id jurusan', 'trim|required');
	$this->form_validation->set_rules('tahun_masuk_universitas', 'tahun masuk universitas', 'trim|required');
	$this->form_validation->set_rules('tahun_masuk_ppm', 'tahun masuk ppm', 'trim|required');
	$this->form_validation->set_rules('id_kelas', 'id kelas', 'trim|required');

	$this->form_validation->set_rules('id_siswa', 'id_siswa', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "Santri.xls";
        $judul = "Daftar Santri";
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
	xlsWriteLabel($tablehead, $kolomhead++, "NIS");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Lengkap");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Panggilan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
	// xlsWriteLabel($tablehead, $kolomhead++, "Umur");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamnin");
	xlsWriteLabel($tablehead, $kolomhead++, "Golongan Darah");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Provinsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Kabupaten");
	xlsWriteLabel($tablehead, $kolomhead++, "Kecamatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaan Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaan Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Saudara");
	xlsWriteLabel($tablehead, $kolomhead++, "Urutan");
	xlsWriteLabel($tablehead, $kolomhead++, "Universitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Fakultas");
	xlsWriteLabel($tablehead, $kolomhead++, "Jurusan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Masuk Universitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Masuk Ppm");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");

	foreach ($this->Siswa_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->value);
	    xlsWriteLabel($tablebody, $kolombody++, $data->siswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_panggilan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
	    // xlsWriteNumber($tablebody, $kolombody++, $data->umur);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamnin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->golongan_darah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_hp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->provinsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kabupaten);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kecamatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pekerjaan_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pekerjaan_ibu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_saudara);
	    xlsWriteNumber($tablebody, $kolombody++, $data->urutan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->universitas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fakultas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jurusan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun_masuk_universitas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun_masuk_ppm);
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
        header("Content-Disposition: attachment;Filename=siswa.doc");

        $data = array(
            'siswa_data' => $this->Siswa_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('siswa_doc',$data);
    }

}
