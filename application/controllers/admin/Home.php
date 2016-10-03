<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function verifica_sessao() {
        if (!$this->session->logado) {
            redirect('home/login');
        }
    }
    
    public function index() {

        $this->verifica_sessao();


        $this->load->view('inc/titulo');
        $this->load->view('home');
    }
    
    public function login() {
        $this->load->view('login');
    }

    public function logar() {
        //Habilita a exibição de um conjunto de informações da execução deste método
        //$this->output->enable_profiler(TRUE);
        // carrega a model com os métodos da tabela usuarios
        $this->load->model('Usuarios_model', 'usuarios');
        
        // obtém os dados do form
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        
        $verifica = $this->usuarios->verificaUsuario($email, $senha);
        
        if (isset($verifica)) {
            $sessao['nome'] = $verifica->nome;
            $sessao['id'] = $verifica->id;
            $sessao['logado'] = true;
            $this->session->set_userdata($sessao);
        }
       redirect();
    }
    
    public function sair() {
        $this->session->sess_destroy();
        redirect();
    }
    
}