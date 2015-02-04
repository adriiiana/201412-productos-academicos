<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_news($slug = FALSE)
    {
        $carrera = $this->db->get('carrera');
        
        //si existe más de una fila
        if($carrera->num_rows() > 0)
        {
            
            //hacemos un return con un array que contiene las
            //carrera de la tabla provincias_es y así lo
            //tenemos disponible en el controlador home.php
            return $carrera->result();
        }
		else{
			return $carrera=0;
		}
    }
    public function set_news()
    {
        $this->load->helper('url');
    
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
    
        $data = array(
            'nombre' => $this->input->post('title')
        );
    
        return $this->db->insert('carrera', $data);
    }
	public function delete_major()
    {
        $this->load->helper('url');
    
        $slug = url_title($this->input->post('deleteN'), 'dash', TRUE);
    
        $data = array(
            'nombre' => $this->input->post('deleteN')
        );
    
        return $this->db->delete('carrera', array('nombre' => $data['nombre']));
    }
	public function eliminar($id)
    {
		$this->db->where('id',$id);
		$this->db->delete('carrera');
		header('location:http://localhost/201412-productos-academicos/index.php/news/create');
    }
	public function obtenerEnlace($id){
		$this->db->where('id',$id);
		$query = $this->db->get('carrera');
		if($query->num_rows() >0){
			return $query;
		}else{
			return FALSE;
		}
	}
	public function editarEnlaces($id,$nombre){
		echo $this->db->where('id',$id);
		$data = array (
			'nombre' => $nombre
		);
		$result = $this->db->update('carrera',$data);
		echo $result;
	}
}