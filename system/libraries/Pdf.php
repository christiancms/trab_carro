<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

define('FPDF_FONTPATH', 'assets/font');
require('fpdf.php');

class CI_Pdf extends FPDF {

    private $titulo;
    private $colunas;

    public function setTitulo($texto) {
        $this->titulo = $texto;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setColunas($cols) {
        $this->colunas = $cols;
    }

    public function getColunas() {
        return $this->colunas;
    }

    // extends FPDF using this class
    function __construct($orientation = 'P', $unit = 'mm', $size = 'A4') {
        // chama a classe pai
        parent::__construct($orientation, $unit, $size);
    }

    // redefine a funÃ§Ã£o Header
    function Header() {
        // define a fonte do texto dos relatÃ³rios do sistema
        $this->SetFont("Arial", "B", 15);
        // insere o tÃ­tulo maior do cabeÃ§alho
        $this->Cell(0, 10, "Revenda Carros", 0, 0, "C");
        // quebra de linha
        $this->Ln(7);
        $this->SetFontSize(12);
        $this->Cell(0, 10, $this->getTitulo(), 0, 1, "C");

        $this->SetFontSize(10);

        // adiciona ao pdf o tÃ­tulo das colunas
        foreach ($this->getColunas() as $coluna => $largura) {
            $this->Cell($largura, 10, $coluna);
        }
        $this->Ln();

        // faz um traÃ§o
        $this->Cell(190, 0, "", "T");
        $this->Ln();

        $this->SetFont("Arial", "", 10);
    }

    // redefine a funÃ§Ã£o Footer
    function Footer() {
        // Posiciona a 1,5cm da margem inferior da pÃ¡gina
        $this->SetY(-15);
        // outro traÃ§o
        $this->Cell(190, 0, "", "T");
        $this->Ln();
        $this->SetFont("Arial", "I", 8);
        $this->Cell(0, 10, utf8_decode("Página: ") . $this->PageNo() . "/{nb}", 0, 0, "C");
    }

}
