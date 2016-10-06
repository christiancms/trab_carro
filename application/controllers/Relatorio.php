<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Pdf');
    }

    public function clientes() {
        // carrega a mnode clientes
        $this->load->model('Clientes_model', 'clientes');

        //obtém os registros a serem exibidos no relatório
        $dados = $this->clientes->select();

        // define o titulo do relatório
        $this->pdf->setTitulo(utf8_decode('Relatório Clientes'));

        // Define as colunas a serem exibidas
        $this->pdf->setColunas(array(utf8_decode('Código') => 15,
            'Nome do Cliente' => 60,
            'E-mail' => 60,
            'Cidade' => 30));

        //uso do contador de paginas
        $this->pdf->AliasNbPages();

        // Adiciona uma pagina
        $this->pdf->AddPage();


        // percore as linhas obtidas
        foreach ($dados as $linha) {
            $this->pdf->Cell(15, 8, $linha->id . ' ', 0, 0, 'R');
            $this->pdf->Cell(60, 8, utf8_decode($linha->nome));
            $this->pdf->Cell(60, 8, $linha->email);
            $this->pdf->Cell(60, 8, utf8_decode($linha->cidade), 0, 1);
        }

        // gera relatório

        $this->pdf->Output();
    }

    public function veiculos() {
        // carrega a mnode clientes
        $this->load->model('Veiculos_model', 'veiculos');

        //obtém os registros a serem exibidos no relatório
        $dados = $this->veiculos->select();

        // define o titulo do relatório
        $this->pdf->setTitulo(utf8_decode('Relatório Veiculos'));

        // Define as colunas a serem exibidas
        $this->pdf->setColunas(array(utf8_decode('Código') => 15,
            'Veiculo' => 60,
            'Ano' => 60,
            'Valor' => 30,
            'Foto' => 30));

        //uso do contador de paginas
        $this->pdf->AliasNbPages();

        // Adiciona uma pagina
        $this->pdf->AddPage();


        // percore as linhas obtidas
        foreach ($dados as $linha) {
            $this->pdf->Cell(15, 8, $linha->id . ' ', 0, 0, 'R');
            $this->pdf->Cell(60, 8, utf8_decode($linha->modelo));
            $this->pdf->Cell(60, 8, $linha->ano);
            $this->pdf->Cell(60, 8, utf8_decode($linha->preco), 0, 1);
            $this->pdf->Image('fotos/' . utf8_decode($linha->foto), 1, 1);
        }

        // gera relatório

        $this->pdf->Output();
    }

}
