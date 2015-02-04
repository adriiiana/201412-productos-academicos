<?php
class Edialecto_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_all() {
		$query = $this->db->get('dialecto');
		return $query->result();
	}

	public function get_by_id( $id ) {
		$this->db->where('id', $id);
		$query = $this->db->get('dialecto');
		return $query->result();
	}

	public function add( $data ) {
		$this->db->insert('dialecto', $data);
    }

    public function erase( $id ) {
    	$this->db->where('id', $id);
		$this->db->delete('dialecto');
    }

    public function update( $id, $data ) {
    	$this->db->where('id', $id);
		$this->db->update('dialecto', $data);
    }

    public function get_all_egresados() {
		$query = $this->db->get('egresado');
		return $query->result();
	}

}