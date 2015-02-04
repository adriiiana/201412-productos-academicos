<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	//Agrega datos
	function Agregar_cep($data){
		$this->db->insert('pais',array('nombre' => $data['pais']));
		$id_pais = $this->db->insert_id();
		$this->db->insert('estado',array('nombre' => $data['estado'],'pais_id' => $id_pais));
		$id_estado = $this->db->insert_id();
		$this->db->insert('ciudad',array('nombre' => $data['ciudad'],'estado_id' => $id_estado));
		echo"<script>alert('Datos almacenados correctamente')</script>";
	}
	function getPs($tabla){
		$this->db->order_by('id','ASC');
		$ciudades = $this->db->get($tabla);
		if($ciudades->num_rows() > 0) 
			return $ciudades;
		else 
			return false;
	}
	function getP($tabla,$id){
		$this->db->where('id',$id);
		$query = $this->db->get($tabla);
		if($query->num_rows() > 0) 
			return $query;
		else 
			return false;
	}
	function eliminar($tabla,$id){
		$this->db->delete($tabla,array('id'=>$id));
	}
	function actualizarTodo($id, $data){
		echo $data['pais'];
		$this->db->where('id',$id);
		$query = $this->db->update('pais',$data['pais']);
		$this->db->where('id',$id); 
		$query = $this->db->update('estado',$data['estado']);
		$this->db->where('id',$id); 
		$query = $this->db->update('ciudad',$data['ciudad']);
	}
}
?>