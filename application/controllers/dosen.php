<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('dosen_model');
        $this->load->library('session');
    }

    public function index() {
        $data['dosen'] = $this->dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['dosen'] = $this->dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/form_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $nidn = $this->input->post('nidn');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');

        $data = array(
            'nidn' => $nidn,
            'nama' => $nama,
            'alamat' => $alamat,
            'jk' => $jk,
            'email' => $email,
            'tlpn' => $tlpn
        );

        $result = $this->dosen_model->insert_dosen($data);

        if ($result) {
            $this->session->set_flashdata('success', 'Dosen berhasil disimpan');
            redirect('dosen');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan dosen');
            redirect('dosen');
        }
    }
    public function hapus($nidn){
        $this->dosen_model->delete_dosen($nidn);
        redirect('dosen');
    }
    public function edit($nidn){
        $data['dosen'] = $this->dosen_model->get_dosen_by_id($nidn);
        $this->load->view('templates/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        $this->form_validation->set_rules('nidn','nidn','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('jk','jk','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('tlpn','tlpn','required');

        if ($this->form_validation->run()===FALSE){
            $this->index($id);
        } 
        else {
            $data = [
                'nidn'=> $this->input->post('nidn'),
                'nama'=> $this->input->post('nama'),
                'alamat'=> $this->input->post('alamat'),
                'jk'=> $this->input->post('jk'),
                'email'=> $this->input->post('email'),
                'tlpn'=> $this->input->post('tlpn'),
            ];
            $this->dosen_model->update_dosen($id, $data);
            redirect('dosen');
        }
    }

}