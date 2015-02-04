<?php
class Eidioma_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_all() {
		$query = $this->db->get('idioma');
		return $query->result();
	}

	public function add_egresado_idioma( $data ) {
		$this->db->insert('egresadoidioma', $data);
	}

	public function remove_egresado_idioma( $id_e, $id_i ) {
		$this->db->where('egresado_id', $id_e);
		$this->db->where('idioma_id', $id_i);
		$this->db->delete('egresadoidioma');
	}

	public function get_idiomas_egresado( $id ){
		//$this->db->query('SELECT FROM ');
		$this->db->select('*');
		$this->db->from('egresado');
		$this->db->where('egresado.id ='.$id);
		$this->db->join('egresadoidioma', 'egresadoidioma.egresado_id = egresado.id');
		$this->db->join('idioma', 'idioma.id = egresadoidioma.idioma_id');

		$data = $this->db->get()->result();
		
		$idioma = NULL;
		$i=0;
		foreach ($data as $key ) {
			$idioma[$i++] = ['id' => $key->idioma_id, 'idioma' => $key->nombre ];
		}

		return $idioma;
	}

	public function get_no_idiomas_egresado( $id ){

		$idiomas = $this->get_idiomas_egresado( $id );
		
		if( $idiomas == NULL){
			$tmp = $this->get_all();

			$i=0;
			$no_idiomas = NULL;
			foreach ($tmp as $key ) {
				$no_idiomas[$i++] = ['id' => $key->id, 'idioma' => $key->nombre];
			}

			return $no_idiomas;
		}
		
		$this->db->from('idioma');

		$i=0;
		foreach ($idiomas as $key ) {
			$this->db->where('id !='.$key['id']);	
		}

		$data = $this->db->get()->result();
		
		$i=0;
		$no_idiomas = NULL;
		foreach ($data as $key ) {
			$no_idiomas[$i++] = ['id' => $key->id, 'idioma' => $key->nombre];
		}

		return $no_idiomas;
	}

	public function get_by_id( $id ) {
		$this->db->where('id', $id);
		$query = $this->db->get('idioma');
		return $query->result();
	}

	public function add( $data ) {
		$this->db->insert('idioma', $data);
    }

    public function delete( $id ) {
    	$this->db->where('id', $id);
		$this->db->delete('idioma');
    }

    public function update( $id, $data ) {
    	$this->db->where('id', $id);
		$this->db->update('idioma', $data);
    }

    public function get_all_egresados() {
		$query = $this->db->get('egresado');
		return $query->result();
	}

}