<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_adm extends CI_Controller {
    public function index() {
        $this->load->view('inc/titulo');
        $this->load->model('Veiculos_model', 'veiculosM');
        $dados['veiculos'] = $this->veiculosM->destaque();
        $this->load->view('home_adm', $dados);
    }
}
