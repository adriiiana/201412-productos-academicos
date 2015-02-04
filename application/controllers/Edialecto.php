<?php

class Edialecto extends CI_Controller {

        public function __construct() {

                parent::__construct();
                $this->load->model('edialecto_model');
                $this->load->helper('url'); 
        }

        public function index() {

                $data['items'] = $this->edialecto_model->get_all();
                $data['Titulo'] = "Dialectos";
                $this->load->view('otcelaid_view', $data);
        }

        public function eliminar( $id ) {

                $this->edialecto_model->erase($id);
                redirect('e_dialecto' );
        }

        public function actualizar( $id = NULL ) {

                $data = $this->input->post();

                if( $data != NULL ) {
                        $id = $data['id'];
                        $this->edialecto_model->update( $id, $data );
                        redirect('e_dialecto' );
                }
                $data['Titulo'] = "Dialectos";
                $data['items'] = $this->edialecto_model->get_all();
                $data['modified'] = $this->edialecto_model->get_by_id( $id );
                $this->load->view('otcelaid_view', $data);           
                
        }

        public function agregar() {

                $data = $this->input->post();
                $this->edialecto_model->add( $data );
                redirect('e_dialecto' );
        }
}