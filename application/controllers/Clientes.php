<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
//        if (!$this->session->logado) {
//            redirect('home/login');
//        }
        // carrega a model clientes
        $this->load->model('Clientes_model', 'clientesM');
    }

    public function index()
    {
        $dados['clientes'] = $this->clientesM->select();
        $this->load->view('inc/titulo');
        $this->load->view('clientes_view', $dados);
    }


    public function open_incluir()
    {
        $dados['clientes'] = $this->clientesM->select();
        $this->load->view('inc/titulo');
        $this->load->view('form_clientes_inc', $dados);
    }

    public function grava_inclusao()
    {
        $dados = $this->input->post();
        $this->clientesM->insert($dados);
        redirect(base_url('clientes'));
    }

}
