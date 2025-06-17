<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_user extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dokter_model'); 
    }

    public function index() {
        if ($this->session->userdata('role') != 'user') {
            redirect('auth/login');
        }
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_pasien_model extends CI_Model {

    // Simpan data ke tabel 'pendaftaran' (bukan 'pendaftaran_pasien' lagi)
    public function insert($data) {
        return $this->db->insert('pendaftaran', $data);
    }

    // Ambil semua data dokter
    public function get_all_dokter() {
        return $this->db->get('dokter')->result_array();
    }
}
        $data['nama_dokter'] = $this->Dokter_model->get_all(); 
        $this->load->view('templates/header');
        $this->load->view('pendaftaran/form_pendaftaran', $data);
        $this->load->view('templates/footer');
    }
}