<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {
    public function get_all() {
        return $this->db->get('dokter')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('dokter', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('dokter', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('dokter', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('dokter');
    }
}