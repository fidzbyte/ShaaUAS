<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    // Tampil semua data
    public function index() {
        $data['pasien'] = $this->Pasien_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pasien/index', $data);
        $this->load->view('template/footer');
    }

    // Form tambah
    public function create() {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pasien/create');
        $this->load->view('template/footer');
    }

    // Simpan data
    public function store() {
        $data = [
            'norm' => $this->input->post('norm'),
            'nama' => $this->input->post('nama'),
            'notelp' => $this->input->post('notelp'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->Pasien_model->insert($data);
        redirect('pasien');
    }

    // Form edit
    public function edit($norm) {
        $data['pasien'] = $this->Pasien_model->get_by_id($norm);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pasien/edit', $data);
        $this->load->view('template/footer');
    }

    // Update data
    public function update($norm) {
        $data = [
            'nama' => $this->input->post('nama'),
            'notelp' => $this->input->post('notelp'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->Pasien_model->update($norm, $data);
        redirect('pasien');
    }

    // Hapus data
    public function delete($norm) {
        $this->Pasien_model->delete($norm);
        redirect('pasien');
    }
}