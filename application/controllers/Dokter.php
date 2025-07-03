<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dokter_model');
    }

    public function index() {
        $data['dokter'] = $this->Dokter_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dokter/index', $data);
        $this->load->view('template/footer');
    }

    public function create() {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dokter/create');
        $this->load->view('template/footer');
    }

    public function store() {
        $data = [
            'nama' => $this->input->post('nama'),
            'notelp' => $this->input->post('notelp')
        ];
        $this->Dokter_model->insert($data);
        redirect('dokter');
    }

    public function edit($id) {
        $data['dokter'] = $this->Dokter_model->get_by_id($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dokter/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id) {
        $data = [
            'nama' => $this->input->post('nama'),
            'notelp' => $this->input->post('notelp')
        ];
        $this->Dokter_model->update($id, $data);
        redirect('dokter');
    }

    public function delete($id) {
        $this->Dokter_model->delete($id);
        redirect('dokter');
    }
}