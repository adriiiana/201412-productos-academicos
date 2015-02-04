<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eidioma extends CI_Controller {

        public function __construct() {

                parent::__construct();
                $this->load->model('eidioma_model');
                $this->load->model('Egresadodao');
                $this->load->helper('url'); 
        }

        public function add_egre_idioma() {
                $data['egresado_id'] = $this->input->post('id_egresado');
                $data['idioma_id'] = $this->input->post('id_idioma');
                $data['dominado_al'] = $this->input->post('dominado');
                $this->eidioma_model->add_egresado_idioma( $data );
                $this->view_idiomas( $data['egresado_id'] );
        }

        public function remove_egre_idioma() {
                $id_e = $this->input->post('id_egresado');
                $id_i = $this->input->post('id_idioma');
                $this->eidioma_model->remove_egresado_idioma( $id_e, $id_i );
                $this->view_idiomas( $id_e );
        }

        public function view_idiomas( $id ){
                
                $data['id'] = $id;

                $egre = $this->Egresadodao->getEgresadoById( $id );
                $name =  $egre['data']->nombres.' '.$egre['data']->apellidos;
                $matricula = $egre['data']->matricula;

                $data['name'] = $name;
                $data['matricula'] = $matricula;

                $idiomas = $this->eidioma_model->get_idiomas_egresado( $id );
                $data['idiomas'] = $idiomas;

                $no_idiomas = $this->eidioma_model->get_no_idiomas_egresado( $id );
                $data['no_idiomas'] = $no_idiomas;
                
                //print_r($data['idiomas']);
                //print_r($data['no_idiomas']);
                $this->load->view('egreIdioma', $data);
        }

        public function index() {

                $data['items'] = $this->eidioma_model->get_all();
                $data['Titulo'] = "Idiomas";
                $this->load->view('amoidi_view', $data);
        }

        public function eliminar( $id ) {

                $this->eidioma_model->delete($id);
                redirect('e_idioma' );
        }

        public function actualizar( $id = NULL ) {

                $data = $this->input->post();

                if( $data != NULL ) {
                        $id = $data['id'];
                        $this->eidioma_model->update( $id, $data );
                        redirect('e_idioma' );
                }
                $data['Titulo'] = "Idiomas";
                $data['items'] = $this->eidioma_model->get_all();
                $data['modified'] = $this->eidioma_model->get_by_id( $id );
                $this->load->view('amoidi_view', $data);
        }

        public function agregar() {

                $data = $this->input->post();
                $this->eidioma_model->add( $data );
                redirect('e_idioma' );
        }
}