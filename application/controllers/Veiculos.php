<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // define o formato para um fuso horário Brasileiro
        date_default_timezone_set('America/Sao_Paulo');
        // carrega a model a ser utilizada neste controller
        $this->load->model('Veiculos_model', 'veiculosM');
    }

    public function index() {
        $this->load->view('inc/titulo');
        // obtém os dados do model marcas_model
        $dados['veiculos'] = $this->veiculosM->select();
        $dados['soma'] = $this->veiculosM->total();
        $this->load->view('veiculos_view', $dados);
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

    public function grava_inclusao() {

        // recebe os dados do formulário
        $dados = $this->input->post();

        // define as configurações para upload da foto
        $config['upload_path'] = './fotos/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $mensa = "Erro na gravação da foto do veículo" . $this->upload->display_errors();
            $tipo = 0;
        } else {
            $arquivo = $this->upload->data();
            $dados['foto'] = $arquivo['file_name'];

            if ($this->veiculosM->insert($dados)) {
                $mensa = "Veículo corretamente cadastrado";
                $tipo = 1;
            } else {
                $mensa = "Veículo Não Cadastrado";
                $tipo = 0;
            }
        }
        // atribui para variáveis de sessão "flash"
        $this->session->set_flashdata('mensa', $mensa);
        $this->session->set_flashdata('tipo', $tipo);

        // recarrega a view (index)
        redirect(base_url('veiculos'));
    }

    public function alterar($id) {
        $this->load->view('inc/titulo');
        // obtém os campos do veículo cujo id foi passado por parâmetro
        $dados['veiculo'] = $this->veiculosM->find($id);

        // carrega a model para recuperar as marcas cadastradas
        $this->load->model('Marcas_model', 'marcasM');

        // obtém as marcas
        $dados['marcas'] = $this->marcasM->select();

        $this->load->view('veiculos_form_alterar', $dados);
    }

    public function grava_alteracao() {

        // recebe os dados do formulário
        $dados = $this->input->post();

        $mensa = "";

        // se não estiver vazio o campo da foto
        // ... significa que o usuário selecionou uma nova foto que deve ser alterada
        if (!empty($_FILES["foto"]["tmp_name"])) {

            // define as configurações para upload da foto
            $config['upload_path'] = './fotos/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 100;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $mensa = "Erro na gravação da foto do veículo " . $this->upload->display_errors();
                $tipo = 0;
            } else {
                $arquivo = $this->upload->data();
                $dados['foto'] = $arquivo['file_name'];

                // recupera os dados do veículo para remover a foto antiga
                $veiculo = $this->veiculosM->find($dados['id']);

                // exclui a foto (antiga)
                unlink('./fotos/' . $veiculo->foto);
            }
        }

        if ($this->veiculosM->update($dados)) {
            $mensa .= "Dados do veículo alterados corretamente";
            $tipo = 1;
        } else {
            $mensa .= "Dados do veículo não foram alterados";
            $tipo = 0;
        }

        // atribui para variáveis de sessão "flash"
        $this->session->set_flashdata('mensa', $mensa);
        $this->session->set_flashdata('tipo', $tipo);

        // recarrega a view (index)
        redirect(base_url('veiculos'));
    }

    public function excluir($id) {
        // obtém os dados do registro a ser excluído (para posterior exclusão da foto)
        $veiculo = $this->veiculosM->find($id);

        if ($this->veiculosM->delete($id)) {
            $mensa .= "Veículo corretamente excluído";
            $tipo = 1;

            // exclui a foto do veículo
            unlink('./fotos/' . $veiculo->foto);
        } else {
            $mensa .= "Não foi possível excluir o veículo";
            $tipo = 0;
        }

        // atribui para variáveis de sessão "flash"
        $this->session->set_flashdata('mensa', $mensa);
        $this->session->set_flashdata('tipo', $tipo);

        // recarrega a view (index)
        redirect(base_url('veiculos'));
    }

    public function selectGraph() {
        $sql = "select m.nome as marca, count(v.id) as num from veiculos v ";
        $sql .= "inner join marcas m ";
        $sql .= "on v.marca_id = m.id ";
        $sql .= "group by m.nome";
        $query = $this->db->query($sql);
        // result retorna um array de dados
        return $query->result();
    }
}