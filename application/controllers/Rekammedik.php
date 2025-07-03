<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedik extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['Rekammedik_model', 'Pasien_model', 'Dokter_model', 'Tindakan_model']);
    }

    public function index() {
        $data['rekammedik'] = $this->Rekammedik_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('rekammedik/index', $data);
        $this->load->view('template/footer');
    }

    public function create() {
        $data = [
            'pasien_list' => $this->Pasien_model->get_all(),
            'dokter_list' => $this->Dokter_model->get_all(),
            'tindakan_list' => $this->Tindakan_model->get_all()
        ];
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('rekammedik/create', $data);
        $this->load->view('template/footer');
    }

    public function store() {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'visum' => $this->input->post('visum'),
            'tindakan' => $this->input->post('tindakan'),
            'norm' => $this->input->post('norm'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_tindakan' => $this->input->post('id_tindakan')
        ];
        $this->Rekammedik_model->insert($data);
        redirect('rekammedik');
    }

    public function edit($id) {
        $data = [
            'rekammedik' => $this->Rekammedik_model->get_by_id($id),
            'pasien_list' => $this->Pasien_model->get_all(),
            'dokter_list' => $this->Dokter_model->get_all(),
            'tindakan_list' => $this->Tindakan_model->get_all()
        ];
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('rekammedik/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id) {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'visum' => $this->input->post('visum'),
            'tindakan' => $this->input->post('tindakan'),
            'norm' => $this->input->post('norm'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_tindakan' => $this->input->post('id_tindakan')
        ];
        $this->Rekammedik_model->update($id, $data);
        redirect('rekammedik');
    }

    public function delete($id) {
        $this->Rekammedik_model->delete($id);
        redirect('rekammedik');
    }
}