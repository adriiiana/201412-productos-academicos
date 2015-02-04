<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_controller extends CI_Controller{
	function __construct(){
		//ejecuta el constructor de la clase padre CI_controller
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('main_model');

	}
	function lista_tabla(){
		$this->load->view('egresados_views/header_view');
		$data['paises'] = $this->main_model->getPs('pais');
		$data['estados'] = $this->main_model->getPs('estado');
		$data['ciudades'] = $this->main_model->getPs('ciudad');
		$this->load->view('egresados_views/gettables_view',$data);
		}
	function editar(){
		$dat['pais'] = $this->main_model->getP('pais',$this->input->post('id'));
		$dat['estado'] = $this->main_model->getP('estado',$this->input->post('id'));
		$dat['ciudad'] = $this->main_model->getP('ciudad',$this->input->post('id'));
		$this->load->view('egresados_views/header_view');
		$this->load->view('egresados_views/editar_view',$dat);


		
	}
	function actualizar(){
		$data=array(
			'pais'=>$this->input->post('paisN'),
			'estado'=>$this->input->post('estadoN'),
			'ciudad'=>$this->input->post('ciudadN')
			);

		$this->main_model->actualizarTodo($this->input->post('id'),$data);
		$this->load->view('egresados_views/header_view');
		$this->load->view('egresados_views/gettables_view',$data);

	}
	function eliminar(){
		$this->main_model->eliminar('pais',$this->input->post('id'));
		$this->main_model->eliminar('ciudad',$this->input->post('id'));
		$this->main_model->eliminar('estado',$this->input->post('id'));
		$this->lista_tabla();
	}
	function agregar(){
		$this->load->view('egresados_views/header_view');
		$this->load->view('egresados_views/formulario_view');
	}
	function recibirDatos(){
		$data=array('pais' => $this->input->post('pais'),'estado'=>$this->input->post('estado'),'ciudad' => $this->input->post('ciudad'));
		$this->main_model->Agregar_cep($data);
		$this->load->view('egresados_views/header_view');
		$this->load->view('egresados_views/bienvenido_view');
	}
	function index(){
		$this->load->view('egresados_views/header_view');
		$this->load->view('egresados_views/bienvenido_view');
	}
}
?>