<?php
require_once '../vendor/fpdf/fpdf.php';

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial','B',16);
        $this->Cell(0,10,'Relatório de Motoristas',0,1,'C');
        $this->Ln(5);
    }

    function Tabela($dados) {
        $this->SetFont('Arial','B',12);
        $this->Cell(100,10,'Nome',1);
        $this->Cell(60,10,'CPF',1);
        $this->Ln();

        $this->SetFont('Arial','',12);
        foreach ($dados as $row) {
            $this->Cell(100,10,$row['NOME'],1);
            $this->Cell(60,10,$row['CPF'],1);
            $this->Ln();
        }
    }
}

$model = new MotoristaModel();
$dados = $model->listar();

$pdf = new PDF();
$pdf->AddPage();
$pdf->Tabela($dados);
$pdf->Output();
