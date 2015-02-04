<?php
class Edialecto_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_all() {
		$query = $this->db->get('dialecto');
		return $query->result();
	}

	public function add_egresado_dielecto( $data ) {
		$this->db->insert('egresadodialecto', $data);
	}

	public function remove_egresado_dialecto( $id_e, $id_i ) {
		$this->db->where('egresado_id', $id_e);
		$this->db->where('dialecto_id', $id_i);
		$this->db->delete('egresadodialecto');
	}

	public function get_dialectos_egresado( $id ){
		//$this->db->query('SELECT FROM ');
		$this->db->select('*');
		$this->db->from('egresado');
		$this->db->where('egresado.id ='.$id);
		$this->db->join('egresadodialecto', 'egresadodialecto.egresado_id = egresado.id');
		$this->db->join('dialecto', 'dialecto.id = egresadodialecto.dialecto_id');

		$data = $this->db->get()->result();
		
		$dialecto = NULL;
		$i=0;
		foreach ($data as $key ) {
			$dialecto[$i++] = ['id' => $key->dialecto_id, 'dialecto' => $key->nombre ];
		}

		return $dialecto;
	}

	public function get_no_dialectos_egresado( $id ){

		$dialectos = $this->get_dialectos_egresado( $id );
		
		if( $dialectos == NULL){
			$tmp = $this->get_all();

			$i=0;
			$no_dialectos = NULL;
			foreach ($tmp as $key ) {
				$no_dialectos[$i++] = ['id' => $key->id, 'dialecto' => $key->nombre];
			}

			return $no_dialectos;
		}
		
		$this->db->from('dialecto');

		$i=0;
		foreach ($dialectos as $key ) {
			$this->db->where('id !='.$key['id']);	
		}

		$data = $this->db->get()->result();
		
		$i=0;
		$no_dialectos = NULL;
		foreach ($data as $key ) {
			$no_dialectos[$i++] = ['id' => $key->id, 'dialecto' => $key->nombre];
		}

		return $no_dialectos;
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