<?php

class Idioma extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('idioma_model');
    }
    
    public function index()
    {
        $this->load->view('idioma_view');
    }
    
    public function agregar()
    {
        if($this->input->post('submit_reg'))
        {
        $this->form_validation->set_rules('IdiomaE','Idioma','required');
        $this->form_validation->set_message('required','El campo %s es Obligatorio');
    
            if($this->form_validation->run() != FALSE)
            {
                $this->idioma_model->addIdi();
                $data = array('mensaje'=>'El nuevo idioma se agrego correctamente');
                $this->load->view('idioma_view',$data);
            }
            else
            {
                $this->load->view('idioma_view');
            }
        }
    }
    
    public function ver()
    {
        $data = array('campos' => $this->idioma_model->verTabla());
        $this->load->view('tabla',$data);
    }
    
    public function borrar()
    {
        $id = $this->uri->segment(3);
        $delete = $this->idioma_model->elimina($id);
        redirect('idioma/ver');
        
    }
    public function editar()
    {
       $id = $this->uri->segment(3);
       $getInf = $this->idioma_model->modificar($id);
        if($getInf != FALSE)
        {
            foreach($getInf->result() as $row){
            $id = $row->id;
            $nombre = $row->nombre;    
            }
            $data = array(
                'id'=> $id,
                'nombre'=>$nombre);
        }
        else
        {
            $data = '';
            return FALSE;
        }
    $this->load->view('modificar',$data);    
    }
    
   public function modifica()
   {
        $id = $this->uri->segment(3);
        $data = array(
            'nombre'=>$this->input->post('IdiomaE',true)  
            );
       $this->idioma_model->modificado($id,$data);
       redirect('idioma/ver');
   }

   public function comprobar_idioma(){
        $uIdioma = $this->input->post('IdiomaE');
        $comprobarI = $this->idioma_model->verificaI($uIdioma);
        if($comprobarI == $uIdioma){
        $this->form_validation->set_message('comprobar_idioma','%s:ya existe en la base de datos');
         $this->index(); 
        return FALSE;
          
        }
        else{
            
            echo '<div style="display:none">1</div>';
            return TRUE;
            
        }
    }
}