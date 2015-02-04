<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresas extends CI_Controller {
   

	function __construct (){
    parent:: __construct();

    $this->load->helper('form');
    $this->load->model('empresas/empresas_model');

  }
  
  function index(){


    /*$data['segmento'] = $this->uri->segment(3);
    $this->load->view('empresas/empresas_header');

    if(!$data['segmento']){

      $data['empresa'] = $this->empresas_model->obtenerEmpresas();
    }
    else
    {

      $data['empresa'] = $this->empresas_model->obtenerEmpresa($data['segmento']);
    }

    $this->load->view('empresas/empresas_menu',$data);
  */
    $data['empresa'] = $this->empresas_model->obtenerEmpresas();
    $this->load->view('empresas/empresas_header');
    $this->load->view('empresas/empresas_menu',$data); 
}
  
  function nuevo(){

    $this->load->view('empresas/empresas_header');
    $this->load->view('empresas/empresas_altas');
  }



  function recibirDatos(){
    $data = array(
      'nombre' => $this->input->post('nombre'),
      'giro'   => $this->input->post('giro'),
      'tamanio' => $this->input->post('tamanio'),
      'descripcion'  => $this->input->post('descripcion'),
      'pais' => $this->input->post('pais'),
      'ciudad' => $this->input->post('ciudad'),
      'estado' => $this->input->post('estado')
    );
  

  $this->empresas_model->crearEmpresa($data);
  $this->load->view('empresas/empresas_header');
  $this->load->view('empresas/empresas_altas');

  }

  function editar(){


    $data['id'] = $this->uri->segment(3);

    $data['empresa'] = $this->empresas_model->obtenerEmpresa($data['id']);

    $this->load->view('empresas/empresas_header');
    $this->load->view('empresas/empresas_editar',$data);
  }

  function borrar(){


    $id = $this->uri->segment(3);

    $this->empresas_model->eliminarEmpresa($id);
    
    $data['empresa'] = $this->empresas_model->obtenerEmpresas();
    $this->load->view('empresas/empresas_header');
    $this->load->view('empresas/empresas_menu',$data);


  }


  function actualizar(){
    $data = array(
      'nombre' => $this->input->post('nombre'),
      'giro'   => $this->input->post('giro'),
      'tamanio' => $this->input->post('tamanio'),
      'descripcion'  => $this->input->post('descripcion'),
      'pais' => $this->input->post('pais'),
      'ciudad' => $this->input->post('ciudad'),
      'estado' => $this->input->post('estado')
    );

    $this->empresas_model->actualizarEmpresa($this->uri->segment(3),$data);

    $data['empresa'] = $this->empresas_model->obtenerEmpresas();
    $this->load->view('empresas/empresas_header');
    $this->load->view('empresas/empresas_menu',$data);  
    //$this->load->view('empresas/empresas_header');
    //$this->load->view('empresas/empresas_bienvenido');

  }


}
?>
