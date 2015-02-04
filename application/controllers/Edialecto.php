<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edialecto extends CI_Controller {

        public function __construct() {

                parent::__construct();
                $this->load->model('edialecto_model');
                $this->load->model('Egresadodao');
                $this->load->helper('url'); 
        }

        public function add_egre_dialecto() {
                $data['egresado_id'] = $this->input->post('id_egresado');
                $data['dialecto_id'] = $this->input->post('id_dialecto');
                $data['dominado_al'] = $this->input->post('dominado');
                $this->edialecto_model->add_egresado_dielecto( $data );
                $this->view_dialectos( $data['egresado_id'] );
        }

        public function remove_egre_dialecto() {
                $id_e = $this->input->post('id_egresado');
                $id_i = $this->input->post('id_dialecto');
                $this->edialecto_model->remove_egresado_dialecto( $id_e, $id_i );
                $this->view_dialectos( $id_e );
        }

        public function view_dialectos( $id ){
                
                $data['id'] = $id;

                $egre = $this->Egresadodao->getEgresadoById( $id );
                $name =  $egre['data']->nombres.' '.$egre['data']->apellidos;
                $matricula = $egre['data']->matricula;

                $data['name'] = $name;
                $data['matricula'] = $matricula;

                $dialectos = $this->edialecto_model->get_dialectos_egresado( $id );
                $data['dialectos'] = $dialectos;

                $no_dialectos = $this->edialecto_model->get_no_dialectos_egresado( $id );
                $data['no_dialectos'] = $no_dialectos;
                
                //print_r($data['dialectos']);
                //print_r($data['no_dialectos']);
                $this->load->view('egreDialecto', $data);
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