<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru_model extends CI_Model
{

    public $table = 'guru';
     public $table_nis = 'nomor_induk_guru';
    public $id = 'id_guru';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->join('nomor_induk_guru', 'nomor_induk_guru.guru_id=guru.id_guru','left');
        $this->db->join('kelas', 'guru.id_kelas=kelas.id_kelas');

        return $this->db->get($this->table)->result();

    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        $this->db->join('nomor_induk_guru', 'nomor_induk_guru.guru_id=guru.id_guru','left');
        $this->db->join('kelas', 'guru.id_kelas=kelas.id_kelas');
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_guru', $q);
	$this->db->or_like('guru', $q);
	$this->db->or_like('nama_panggilan', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('tempat_asal', $q);
	$this->db->or_like('id_kelas', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_guru', $q);
	$this->db->or_like('guru', $q);
	$this->db->or_like('nama_panggilan', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('tempat_asal', $q);
	$this->db->or_like('id_kelas', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
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