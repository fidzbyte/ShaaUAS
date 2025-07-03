<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'count_pasien' => $this->Dashboard_model->count_pasien(),
            'count_dokter' => $this->Dashboard_model->count_dokter(),
            'count_tindakan' => $this->Dashboard_model->count_tindakan(),
            'count_rekammedik' => $this->Dashboard_model->count_rekammedik() 
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}