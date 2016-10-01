<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('marcas_model', 'marcasM');
    }

    public function index() {
        $this->load->view('inc/titulo');
        $this->load->model('marcas_model', 'marcasM');
        $dados['marcas'] = $this->marcasM->select();
        $dados['marcas'] = $this->marcasM->select();
        $this->load->view('manut_marcas', $dados);
    }

    public function open_incluir() {
        $this->load->model('marcas_model', 'marcasM');
        $dados['marcas'] = $this->marcasM->select();
        $this->load->view('form_marcas_inc', $dados);
    }

    public function incluir() {
        $dados = $this->input->post();

        if ($this->marcasM->insert($dados)) {
            redirect(base_url('marcas'));
        }
    }

}
