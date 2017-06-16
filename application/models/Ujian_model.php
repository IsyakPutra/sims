<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ujian_model extends CI_Model
{

    public $table = 'ujian';
    public $id = 'id_ujian';
    //public $table_nis = 'nomor_induk_siswa';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        //$this->db->join('nomor_induk_siswa', 'nomor_induk_siswa.ujian_id=ujian.id_siswa','left');
        $this->db->join('siswa', 'ujian.id_siswa=siswa.id_siswa');
        $this->db->join('guru', 'ujian.id_guru=guru.id_guru');
        $this->db->join('kelas', 'ujian.id_kelas=kelas.id_kelas');
        $this->db->join('materi', 'ujian.id_materi=materi.id_materi');
        $this->db->join('uas', 'ujian.id_uas=uas.id_uas');


        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        //$this->db->join('nomor_induk_siswa', 'nomor_induk_siswa.siswa_id=siswa.id_siswa','left');
        $this->db->join('siswa', 'ujian.id_siswa=siswa.id_siswa');
        $this->db->join('guru', 'ujian.id_guru=guru.id_guru');
        $this->db->join('kelas', 'ujian.id_kelas=kelas.id_kelas');
        $this->db->join('materi', 'ujian.id_materi=materi.id_materi');
        $this->db->join('uas', 'ujian.id_uas=uas.id_uas');
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_ujian', $q);
	$this->db->or_like('id_siswa', $q);
	$this->db->or_like('id_guru', $q);
	$this->db->or_like('id_kelas', $q);
	$this->db->or_like('id_materi', $q);
	$this->db->or_like('id_uas', $q);
	$this->db->or_like('nilai', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_ujian', $q);
	$this->db->or_like('id_siswa', $q);
	$this->db->or_like('id_guru', $q);
	$this->db->or_like('id_kelas', $q);
	$this->db->or_like('id_materi', $q);
	$this->db->or_like('id_uas', $q);
	$this->db->or_like('nilai', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
