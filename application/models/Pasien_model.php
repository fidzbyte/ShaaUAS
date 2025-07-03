<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {
    public function get_all() {
        return $this->db->get('pasien')->result();
    }

    public function get_by_id($norm) {
        return $this->db->get_where('pasien', ['norm' => $norm])->row();
    }

    public function insert($data) {
        $this->db->insert('pasien', $data);
    }

    public function update($norm, $data) {
        $this->db->where('norm', $norm);
        $this->db->update('pasien', $data);
    }

    public function delete($norm) {
        $this->db->where('norm', $norm);
        $this->db->delete('pasien');
    }
}