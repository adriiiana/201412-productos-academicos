<?php
	class Historia_model extends CI_Model{
		

	public function __construct() {
        parent::__construct();
    }

    public function get_historia()
    {
        $query = $this->db->query( "SELECT * FROM historia" );
        $resultado = $query->result();
        return array("data" => $resultado, "numFilas" => $query->num_rows());
    }
    public function getHistoriaById( $id )
    {
        $query = $this->db->query( 'SELECT * FROM historia WHERE id = '.$id );
        $resultado = $query->row();
        return array("data" => $resultado );
    }

    public function update( $id , $datos )
    {
        $this->db->where('id', $id );
        $this->db->update('historia', $datos );
    }

    public function delete( $id )
    {
        $this->db->where('id', $id);
        $this->db->delete('historia');
    }

    public function add( $datos )
    {
        return  $this->db->insert( "historia" , $datos );
    }
    
//++++++++++++++++++++++++++
	}
?>
