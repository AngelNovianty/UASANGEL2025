<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

    // Ambil semua data pendaftaran + nama dokter
    public function get_all_pendaftaran() {
        $this->db->select('pendaftaran.*, dokter.nama_dokter');
        $this->db->from('pendaftaran');
        $this->db->join('dokter', 'dokter.iddokter = pendaftaran.iddokter', 'left');
        return $this->db->get()->result_array();
    }

    // Tambahkan satu fungsi get_all sederhana untuk dropdown
    public function get_all() {
        return $this->db->get('pendaftaran')->result_array();
    }

    public function insert_pendaftaran($data) {
        return $this->db->insert('pendaftaran', $data);
    }

    public function delete_pendaftaran($idpendaftaran) {
        return $this->db->delete('pendaftaran', ['idpendaftaran' => $idpendaftaran]);
    }

    public function get_pendaftaran_by_id($idpendaftaran) {
        $this->db->select('pendaftaran.*, dokter.nama_dokter');
        $this->db->from('pendaftaran');
        $this->db->join('dokter', 'dokter.iddokter = pendaftaran.iddokter', 'left');
        $this->db->where('pendaftaran.idpendaftaran', $idpendaftaran);
        return $this->db->get()->row_array();
    }

    public function update_pendaftaran($id, $data) {
        $this->db->where('idpendaftaran', $id);
        return $this->db->update('pendaftaran', $data);
    }

    public function get_laporan_pendaftaran($dari, $sampai) {
        $this->db->select('pendaftaran.*, dokter.nama_dokter');
        $this->db->from('pendaftaran');
        $this->db->join('dokter', 'dokter.iddokter = pendaftaran.iddokter', 'left');
        $this->db->where('tanggal_publish >=', $dari);
        $this->db->where('tanggal_publish <=', $sampai);
        return $this->db->get()->result();
    }
}
