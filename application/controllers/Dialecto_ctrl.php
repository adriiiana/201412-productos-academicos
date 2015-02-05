<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dialecto_ctrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
			
	function __construct()
    {
        parent::__construct();
        $this->load->model('Dialectos_model');
        //$this->load->library( array('session','form_validation'));
        $this->load->helper( array('url','form'));
        $this->load->database( 'default');
    }
    public function index()
    {
        $datos = $this->Dialectos_model->get_dialecto();

        $this->load->view('inicio_dialecto' , $datos );
    }
    public function view_update( $id ){
        $data = $this->Dialectos_model->getDialectoById( $id );
        $this->load->view('editar_dialecto' , $data );
    }
    public function view_historia( ){
        $this->load->view('inicio_historia');
    }

    //*********************************************
    public function update( ){
        $id = $this->input->post('id');
        $datos = array(
            'id'         =>      $this->input->post('id'),
            'nombre'           =>      $this->input->post('nombre'),
            'descripcion'         =>      $this->input->post('descripcion'),
        );
        $data = $this->Dialectos_model->update( $id , $datos );
        $this->index();
    }
    public function add( ){
        $datos = array(
            'id'         =>      $this->input->post('id'),
            'nombre'           =>      $this->input->post('nombre'),
            'descripcion'         =>      $this->input->post('descripcion'),
        );
        
        $this->Dialectos_model->add( $datos );
        $this->index();
    }

     public function delete( $id ){
        $this->Dialectos_model->delete( $id );
        $this->index();
    }

    public function view_add(  ){
        $this->load->view('agregar_dialecto');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
