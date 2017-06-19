<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Kalender_model extends CI_Model {
  public function agenda(){
    return $this->db->select('id_kegiatan as id, judul_kegiatan as title, tanggal_kegiatan as start')->get('kalender')->result_array();
  }

  public function add($data){
    return $this->db->insert('kalender',$data);
  }

  public function find($id){
    return $this->db->select('id_kegiatan as id, judul_kegiatan as title, tanggal_kegiatan as start')->get_where('kalender',array('id_kegiatan'=>$id))->row();
  }

  public function update($id,$data){
    return $this->db->where('id_kegiatan',$id)->update('kalender',$data);
  }

  public function delete($id){
    return $this->db->where('id_kegiatan',$id)->delete('kalender');
  }
}