<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Advice extends CI_Controller {
	
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
			$this->load->model('advice_model');
			
		/*	foreach ($all->result_array() as $row) {
				$datos['nombre']=$row['nombre'];
				$datos['egresado_id']=$row['egresado_id'];	
			}*/

			if(isset($_POST['nombre']))
			{
				$this->load->model('advice_model');
				
				$this->advice_model->add();
				unset($_POST['nombre']);
			}
			$all= $this->advice_model->showAll();
			$datos['all']=$all;
			$this->load->view('ad_review',$datos);
	}

	public function delete($id)
	{
		$this->load->model('advice_model');
		$this->advice_model->delete($id);
		$all=$this->advice_model->showAll();
		$datos['all']=$all;
		$this->load->view('ad_review',$datos);
	}

	public function edit($id)
	{
		$this->load->model('advice_model');
		$old_data= $this->advice_model->getByID($id);
		$all=$this->advice_model->showAll();
		$datos['all']=$all;
		if(!isset($_POST['nombre']))
		{
			
			$datos['old_data']=$old_data;
			$this->load->view('ad_review',$datos);
		}	
		else
		{
			$data=array(
				'id' => $_POST['id'],
				'nombre'=> $_POST['nombre'],
				'egresado_id'=> $_POST['egresado_id'],
				'contenido' => $_POST['contenido']	
			);
			$this->db->where('id',$_POST['id']);
			$this->db->update('consejo',$data);
			$all=$this->advice_model->showAll();
			$datos['all']=$all;
			$this->load->view('ad_review',$datos);
		}
	}
}
?>