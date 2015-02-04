<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Agregar nueva carrera';
	
		$this->form_validation->set_rules('title', 'Title', 'required');
		//$this->form_validation->set_rules('text', 'text', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$data['news'] = $this->news_model->get_news();
			$data['deleteN'] = $this->news_model->delete_major();

			$this->load->view('templates/header', $data);	
			$this->load->view('news/create', $data['news']);
			$this->load->view('templates/footer');
		
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
			header('location:http://localhost/201412-productos-academicos/index.php/news/create');
		}
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archive';

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['news_item'] = $this->news_model->get_news($slug);

		if (empty($data['news_item']))
		{
			show_404();
		}

		$data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
	}
	public function eliminar(){
		echo $id = $this->uri->segment(3);
		$this->news_model->eliminar($id);
	}
	public function editar(){
		$id = $this->uri->segment(3);
		$obtenerEnlace = $this->news_model->obtenerEnlace($id);
		if($obtenerEnlace != FALSE){
			foreach($obtenerEnlace->result() as $row){
				$nombre=$row->nombre;
			
			}
		
			$data=array(
			'id' => $id,
			'nombre' => $nombre);
		}else{
		
			$data='';
			return FALSE;
		}
		$data['deleteN'] = $this->news_model->delete_major();
		
		$this->load->view('templates/header');
		$this->load->view('news/editar', $data);
		$this->load->view('templates/footer');
	}
	public function editarEnlace(){
		$id=$this->uri->segment(3);
		$nombre = $this->input->post('titulo',true);
		$this->news_model->editarEnlaces($id,$nombre);
		header('location:http://localhost/201412-productos-academicos/index.php/news/create');
	}
}