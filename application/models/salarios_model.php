<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Salarios_model extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
	}
    
    public function addSal()
    {
        $consulta = $this->db->insert('salario',array('puesto_id'=>$this->input->post('puesto',TRUE),
                                                      'experiencia'=>$this->input->post('experie',TRUE),
                                                      'monto_min'=>$this->input->post('MMin',TRUE),
                                                      'monto_max'=>$this->input->post('MMax',TRUE)
                                              ));
    }
    
    public function verTabla()
    {
        $consulta = $this->db->get('salario');
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
        $this->db->delete('salario');
        
    }
    public function modificar($id)
    {
        $query = $this->db->where('id',$id);
        $query1 = $this->db->get('salario');
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
        $this->db->update('salario',$data);
    }
    
}