<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Grafico extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/login');
        }
    }
        
    public function veiculos() {
        // carrega a model clientes
        $this->load->model('Veiculos_model', 'veiculos');
        
        // obtém os registros a serem exibidos no gráfico
        $dados['veiculos'] = $this->veiculos->selectGraph();

        // exibe o título e o gráfico
        $this->load->view('inc/titulo');
        $this->load->view('veiculos_graph', $dados);        
    }

    public function clientes() {
        // carrega a model clientes
        $this->load->model('Clientes_model', 'clientes');
        
        // obtém os registros a serem exibidos no gráfico
        $dados['clientes'] = $this->clientes->selectGraph();

        // exibe o título e o gráfico
        $this->load->view('inc/titulo');
        $this->load->view('clientes_graph', $dados);        
    }
    
    
    }
