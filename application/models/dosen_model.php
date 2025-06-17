<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class dosen_model extends CI_Model{
    public function get_all_dosen(){
        return $this->db->get('dosen')->result_array();
    }
    public function insert_dosen($data){
        return $this->db->insert('dosen',$data);
        
    }
    public function delete_dosen($nidn){
        return $this->db->delete('dosen',['nidn'=>$nidn]);
    }
    public function get_dosen_by_id($nidn){
        return $this->db->get_where('dosen',['nidn'=>$nidn])->row_array();
       }
    public function update_dosen($id, $data){
        $this->db->where('nidn',$id);
        return $this->db->update('dosen',$data);
    }
}