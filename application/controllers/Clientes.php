<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/login');
        }
        // carrega a model clientes
        $this->load->model('Clientes_model', 'clientes');
    }

    public function index() {
        $dados['clientes'] = $this->clientes->select();
        $this->load->view('inc/titulo_home');
        $this->load->view('form_clientes_inc', $dados);
    }

    public function email($id) {
        $dados['cliente'] = $this->clientes->find($id);
        $this->load->view('inc/titulo');
        $this->load->view('clientes_email', $dados);
    }

    public function configura($senha) {
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googleemail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '30';
        $config['smtp_user'] = 'infobytemovel@gmail.com';
        $config['smtp_pass'] = '$senha';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);
    }

    public function envia() {
        $destinatario = $this->input->post('destinatario');
        $email = $this->input->post('email');
        $assunto = $this->input->post('assunto');
        $mensagem = $this->input->post('mensagem');
        $senha = $this->input->post('senha');

        $this->load->library('email');
        $this->configura($senha);

        $this->email->from('infobytemovel@gmail.com', 'Infobyte - Revenda');
        $this->email->to('$email');

        $this->email->subject('$assunto');
        $mensagem .= "<p> Estimado Sr(a).: <Strong> $destinatario </strong></p>";
        $mensagem .= $this->input->post('mensagem');

        $mensagem .= "<h3> Revenda Herbie - Depto Comercial </h3>";

        $this->email->mensagem('$mensagem');

        $filename = base_url('mkt/fusca.jpg');
        $this->email->attach($filename);
        $cid = $this->email->attachment_cid($filename);
        $this->email->message($mensagem . '<img src=cid:' . $cid . '" alt="fusca">');

        if ($this->email->send()) {
            // atribui para variáveis de sessão "flash"
            $this->session->set_flashdata('mensa', 'OK! E-mail Enviado com Sucesso');
            $this->session->set_flashdata('tipo', 1);
            redirect('clientes');
        } else {
            print_r($this->email->print_debugger());
        }
        $this->email->send();
    }

    public function open_incluir() {
        $this->load->model('Clientes_model', 'clientesM');
        $dados['clientes'] = $this->clientesM->select();
        $this->load->view('form_clientes_inc', $dados);
    }

    public function incluir() {
        $this->load->view('inc/titulo');
        // carrega a model para recuperar as marcas cadastradas
        $this->load->model('Marcas_model', 'marcasM');

        // obtém as marcas
        $dados['marcas'] = $this->marcasM->select();

        // obtém a data atual no formato 2016-08-22
        $dados['datacad'] = date('Y-m-d');

        $this->load->view('veiculos_form_incluir', $dados);
    }

}
