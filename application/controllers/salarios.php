<?php

class Salarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('salarios_model');
    }
    
    public function index()
    {
        $this->load->view('salario_view');
    }
    
    public function agregar()
    {
        if($this->input->post('submit_reg'))
        {
        $this->form_validation->set_rules('puesto','Puesto','required');
        $this->form_validation->set_rules('experie','Experia','required');
        $this->form_validation->set_rules('MMin','Mminimo','required');
        $this->form_validation->set_rules('MMax','Mmaximo','required');
        
        $this->form_validation->set_message('required','El campo %s es Obligatorio');
        $this->form_validation->set_message('required','El campo %s es Obligatorio');
        $this->form_validation->set_message('required','El campo %s es Obligatorio');
        $this->form_validation->set_message('required','El campo %s es Obligatorio');    
    
            if($this->form_validation->run() != FALSE)
            {
                $this->salarios_model->addSal();
                $data = array('mensaje'=>'El nuevo salario se agrego correctamente');
                $this->load->view('salario_view',$data);
            }
            else
            {
                $this->load->view('salario_view');
            }
        }
    }
    
    public function ver()
    {
        $data = array('campos' => $this->salarios_model->verTabla());
        $this->load->view('tabla2',$data);
    }
    
    public function borrar()
    {
        $id = $this->uri->segment(3);
        $delete = $this->salarios_model->elimina($id);
        redirect('salarios/ver');
        
    }
    public function editar()
    {
       $id = $this->uri->segment(3);
       $getInf = $this->salarios_model->modificar($id);
        if($getInf != FALSE)
        {
            foreach($getInf->result() as $row){
            $id = $row->id;
            $puesto_id = $row->puesto_id;
            $experiencia = $row->experiencia;
            $MMin = $row->monto_min;
            $MMax = $row->monto_max;    
            }
            $data = array(
                'id'=> $id,
                'puesto_id'=>$puesto_id,
                'experiencia'=>$experiencia,
                'MMin' => $MMin,
                'MMax' => $MMax
                );
        }
        else
        {
            $data = '';
            return FALSE;
        }
    $this->load->view('modificarSal',$data);    
    }
    
   public function modifica()
   {
        $id = $this->uri->segment(3);
        $data = array(
            'puesto_id'=>$this->input->post('puesto',true),
            'experiencia'=>$this->input->post('experie',true),
            'monto_min'=>$this->input->post('MMin',true),
            'monto_max'=>$this->input->post('MMax',true)
            );
       $this->salarios_model->modificado($id,$data);
       redirect('salarios/ver');
   }

   
}