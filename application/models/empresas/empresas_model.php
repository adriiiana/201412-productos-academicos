<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresas_model extends CI_Model {
   


	function __construct (){
    parent:: __construct();

    $this->load->database();

  }
  

  function crearEmpresa($data){

    $this->db->insert('empresa',array('nombre'=>$data['nombre'],
      'giro_id'=>$data['giro'],
      'tamanio'=>$data['tamanio'],
      'descripcion'=>$data['descripcion'],
      'ciudad_id'=>$data['ciudad'], 
      'estado_id'=>$data['estado'], 
      'pais_id'=>$data['pais'] 
    
    
    ));

  }

  function obtenerEmpresas(){
    $query = $this->db->get('empresa');

    if($query->num_rows()>0) return $query;
    else
      return false;

  }


  function obtenerEmpresa($id){

    $this->db->where('id',$id); 
    $query = $this->db->get('empresa');

    if($query->num_rows()>0) return $query;
    else
      return false;

  }


  function actualizarEmpresa($id_empresa,$data){

    $datos = array('nombre'=>$data['nombre'],
      'giro_id'=>$data['giro'],
      'tamanio'=>$data['tamanio'],
      'descripcion'=>$data['descripcion'],
      'ciudad_id'=>$data['ciudad'], 
      'estado_id'=>$data['estado'], 
      'pais_id'=>$data['pais']
    ); 
 


    $this->db->where('id',$id_empresa); 
    $query = $this->db->update('empresa',$datos);


  }


  function eliminarEmpresa($id){
  
    $this->db->delete('empresa',array('id'=>$id));
  }

}
?>
