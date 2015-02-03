<?php
class Event_model extends CI_Model {

	var $id = '';
    var $nombre = '';
	var $carrera_id = '';
	var $descripcion='';
	var $inicia_el = '';
	var $termina_el = '';

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function add()
    {
    	//Obtenemos todos los datos desde el POST
        $this->id = $this->input->post('id');
    	$this->nombre = $this->input->post('nombre');
    	$this->carrera_id = $this->input->post('carrera_id');
    	$this->descripcion = $this->input->post('descripcion');
        $this->inicia_el = $this->input->post('inicia_el');
    	$this->termina_el = $this->input->post('termina_el');
    	//Insertamos el registro nuevo en la base de datos
    	$this->db->insert('evento', $this);
    }

    function update()
    {
    	$this->id = $this->input->post('id');
        $this->nombre = $this->input->post('nombre');
        $this->carrera_id = $this->input->post('carrera_id');
        $this->descripcion = $this->input->post('descripcion');
        $this->inicia_el = $this->input->post('inicia_el');
        $this->termina_el = $this->input->post('termina_el');
        
    	$this->db->update('evento', $this, array('id', $_POST['id']));	
    }

    function showAll()
    {
        return $this->db->get('evento');
        
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('evento');
    }

    function getByID($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('evento');
        $fila=$query->row();
        return $fila;
    }
   

}

?>