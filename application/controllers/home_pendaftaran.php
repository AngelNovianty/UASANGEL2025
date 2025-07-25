<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_pendaftaran extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homependaftaran_model');
    }

    public function index()
    {
        $data['pendaftaran']=$this->HomePendaftaran_model->get_all();
        $this->load->view('layouts/header');
        $this->load->view('home/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail ($id)
    {
        $this->load->model('HomePendaftaran_model');
        $data['pendaftaran']=$this->HomePendaftaran_model->get_by_id($id);

        if (!$data['pendaftaran']){
            show_404();
        }
        $this->load->view('layouts/header');
        $this->load->view('home/detail', $data);
        $this->load->view('layouts/footer');
    }
}