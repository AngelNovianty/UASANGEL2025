<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class dokter_model extends CI_Model{
    public function get_all_dokter(){
        return $this->db->get('dokter')->result_array();
    }
    public function get_all(){
        return $this->db->get('dokter')->result();
    }
    public function insert_dokter($data){
        return $this->db->insert('dokter',$data);
    }
    public function delete_dokter($iddokter){
        return $this->db->delete('dokter',['iddokter'=>$iddokter]);
    }
    public function get_dokter_by_id($iddokter){
        return $this->db->get_where('dokter',['iddokter'=>$iddokter])->row_array();
    }
    public function update_dokter($id, $data){
        $this->db->where('iddokter',$id);
        return $this->db->update('dokter',$data);
    }
}