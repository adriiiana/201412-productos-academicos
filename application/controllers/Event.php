<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Event extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Egresadodao');
        //$this->load->library( array('session','form_validation'));
        $this->load->helper( array('url','form'));
        $this->load->database( 'default');
    }

	public function index()
	{
	
			$this->load->model('event_model');
			
			if(isset($_POST['nombre']))
			{
				$this->load->model('event_model');
				
				$this->event_model->add();
				unset($_POST['nombre']);
			}
			$all= $this->event_model->showAll();
			$datos['all']=$all;
			$this->load->view('ev_review',$datos);
	}

	public function delete($id)
	{
		$this->load->model('event_model');
		$this->event_model->delete($id);
		$all=$this->event_model->showAll();
		$datos['all']=$all;
		$this->load->view('ev_review',$datos);
	}

	public function edit($id)
	{
		$this->load->model('event_model');
		$old_data= $this->event_model->getByID($id);
		$all=$this->event_model->showAll();
		$datos['all']=$all;
		if(!isset($_POST['nombre']))
		{
			
			$datos['old_data']=$old_data;
			$this->load->view('ev_review',$datos);
		}	
		else
		{
			$data=array(
				'id'=> $_POST['id'],
				'nombre'=> $_POST['nombre'],
				'carrera_id'=> $_POST['carrera_id'],
				'inicia_el' => $_POST['inicia_el'],
				'termina_el' => $_POST['termina_el'],
				'descripcion' => $_POST['descripcion']	
			);
			$this->db->where('id',$_POST['id']);
			$this->db->update('evento',$data);
			$all=$this->event_model->showAll();
			$datos['all']=$all;
			$this->load->view('ev_review',$datos);
		}
	}
}
?>