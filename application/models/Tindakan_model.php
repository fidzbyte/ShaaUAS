<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan_model extends CI_Model {
    public function get_all() {
        return $this->db->get('tindakan')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('tindakan', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('tindakan', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tindakan', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('tindakan');
    }
}