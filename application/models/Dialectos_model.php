<?php
	class Dialectos_model extends CI_Model{
		

	public function __construct() {
        parent::__construct();
    }

    public function get_dialecto()
    {
        $query = $this->db->query( "SELECT * FROM dialecto" );
        $resultado = $query->result();
        return array("data" => $resultado, "numFilas" => $query->num_rows());
    }
    public function getDialectoById( $id )
    {
        $query = $this->db->query( 'SELECT * FROM dialecto WHERE id = '.$id );
        $resultado = $query->row();
        return array("data" => $resultado );
    }

    public function update( $id , $datos )
    {
        $this->db->where('id', $id );
        $this->db->update('dialecto', $datos );
    }

    public function delete( $id )
    {
        $this->db->where('id', $id);
        $this->db->delete('dialecto');
    }

    public function add( $datos )
    {
        return  $this->db->insert( "dialecto" , $datos );
    }
    
//++++++++++++++++++++++++++
	}
?>
