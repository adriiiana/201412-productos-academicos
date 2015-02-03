<?php
class Advice_model extends CI_Model {

	var $id='';
    var $nombre = '';
	var $egresado_id = '';
	var $contenido='';

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
    	$this->egresado_id = $this->input->post('egresado_id');
    	$this->contenido = $this->input->post('contenido');
        
    	//Insertamos el registro nuevo en la base de datos
    	$this->db->insert('consejo', $this);
    }

    function update()
    {
    	$this->id = $this->input->post('id');
        $this->nombre = $this->input->post('nombre');
    	$this->egresado_id = $this->input->post('egresado_id');
    	$this->contenido = $this->input->post('contenido');

    	$this->db->update('consejo', $this, array('id', $_POST['id']));	
    }

    function showAll()
    {
        return $this->db->get('consejo');
        
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('consejo');
    }

    function getByID($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('consejo');
        $fila=$query->row();
        return $fila;
    }
   



}
?>