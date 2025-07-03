<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Tindakan_model');
    }

    public function index() {
        $data['tindakan'] = $this->Tindakan_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tindakan/index', $data);
        $this->load->view('template/footer');
    }

    public function create() {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tindakan/create');
        $this->load->view('template/footer');
    }

    public function store() {
        $data = ['nama' => $this->input->post('nama')];
        $this->Tindakan_model->insert($data);
        redirect('tindakan');
    }

    public function edit($id) {
        $data['tindakan'] = $this->Tindakan_model->get_by_id($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tindakan/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id) {
        $data = ['nama' => $this->input->post('nama')];
        $this->Tindakan_model->update($id, $data);
        redirect('tindakan');
    }

    public function delete($id) {
        $this->Tindakan_model->delete($id);
        redirect('tindakan');
    }
}