<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
    public function count_pasien()
    {
        return $this->db->count_all('pasien');
    }

    public function count_dokter()
    {
        return $this->db->count_all('dokter');
    }

    public function count_rekammedik()
    {
        return $this->db->count_all('rekammedik');
    }

    public function count_tindakan()
    {
        return $this->db->count_all('tindakan');
    }
}