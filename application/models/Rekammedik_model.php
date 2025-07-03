<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedik_model extends CI_Model {
    public function get_all() {
        $this->db->select('rekammedik.*, pasien.nama as nama_pasien, dokter.nama as nama_dokter, tindakan.nama as nama_tindakan');
        $this->db->from('rekammedik');
        $this->db->join('pasien', 'pasien.norm = rekammedik.norm');
        $this->db->join('dokter', 'dokter.id = rekammedik.id_dokter');
        $this->db->join('tindakan', 'tindakan.id = rekammedik.id_tindakan');
        return $this->db->get()->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('rekammedik', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('rekammedik', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('rekammedik', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('rekammedik');
    }
}