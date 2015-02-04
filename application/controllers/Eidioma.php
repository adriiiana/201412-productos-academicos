<?php

class Eidioma extends CI_Controller {

        public function __construct() {

                parent::__construct();
                $this->load->model('eidioma_model');
                $this->load->helper('url'); 
        }

        public function index() {

                $data['items1'] = $this->eidioma_model->get_all();
                $data['items2'] = $this->eidioma_model->get_all_egresados();
                $data['Titulo'] = "Idiomas";
                $this->load->view('idioma_view', $data);
        }

        public function eliminar( $id ) {

                $this->eidioma_model->delete($id);
                redirect('idioma' );
        }

        public function actualizar( $id = NULL ) {

                $data = $this->input->post();

                if( $data != NULL ) {
                        $id = $data['id'];
                        $this->eidioma_model->update( $id, $data );
                        redirect('idioma' );
                }
                $data['Titulo'] = "Idiomas";
                $data['items'] = $this->eidioma_model->get_all();
                $data['modified'] = $this->eidioma_model->get_by_id( $id );
                $this->load->view('idioma_view', $data);           
                
        }

        public function agregar() {

                $data = $this->input->post();
                $this->eidioma_model->add( $data );
                redirect('e_ idioma' );
        }
}