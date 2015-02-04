<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Idioma_model extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
	}
    
    public function verificaI($uIdioma){
        $this->db->where('nombre',$uIdioma);
        $consulta = $this->db->get('idioma');
        if($consulta->num_rows()==1)
        {
            $row=$consulta->row();
            return $row->nombre;
        }
    }
    
    public function addIdi()
    {
        $consulta = $this->db->insert('idioma',array('nombre'=>$this->input->post('IdiomaE',TRUE)
                                              ));
        
    }
    
    public function verTabla()
    {
        $consulta = $this->db->get('idioma');
        if($consulta->num_rows() > 0)
        {
            return $consulta;    
        }
        else
        {
            return false;
        }
            
    }
    
    public function elimina($id)
    {
        $consulta = $this->db->where('id',$id);
        
        $this->db->delete('idioma');
        
    }
    public function modificar($id)
    {
        $query = $this->db->where('id',$id);
        $query1 = $this->db->get('idioma');
        if($query1->num_rows() > 0)
        {
            return $query1;
        }
        else
        {
            return FALSE;
        }
    }
    public function modificado($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('idioma',$data);
    }
    
}