<?php
require_once("../fpdf186/fpdf.php");
include_once("../../dao/manipuladados.php");

function converte($String)
{
    return iconv("UTF-8", "ISO-8859-1", $String);
}

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();

$pdf = new FPDF("P", "pt", "A4");

// Verifica se há dados na lista
if (empty($lista)) {
    echo "Não há restaurantes cadastrados.";
    exit;
}
$paginaAtual = 0;
$paginasTotal = $dados->countAllDataFromTable('tb_restaurantes');
foreach ($lista as $restaurante) {
    // Adiciona uma nova página para cada restaurante
    $pdf->AddPage();

    // Frente do certificado
    $pdf->Image("../img/relatorio/relatorio-capa.png", 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());
    $pdf->Ln(30);

    // Recuperando dados
    $id = $restaurante['id'];
    $nome = $restaurante['nome'];
    $descricao = $restaurante['descricao'];
    $localizacao = $restaurante['localizacao'];

    $pdf->SetFont("Arial", "", 18);
    $pdf->SetY(220);
    $pdf->SetMargins(20, 20, 20, 20);

    // Texto principal
    $pdf->MultiCell(0, 20, converte("O relatório do restaurante TKFood deste mês"), 0, "C", false);
    $pdf->Ln(10);

    // Análise UTF-8 (Ajustado para correta codificação)
    $pdf->MultiCell(0, 20, converte("Análise UTF-8"), 0, "C", false);
    $pdf->Ln(20);

    $pdf->SetFont("Arial", "B", 20);
    $pdf->MultiCell(0, 20, converte($nome), 0, "C", false);
    $pdf->Ln(20);

    $pdf->SetFont("Arial", "", 20);
    // Nome, descrição, localização
    $pdf->MultiCell(0, 20, converte("Nome: ") . converte($nome), 0, "C", false);
    $pdf->Ln(10);

    $pdf->MultiCell(0, 20, converte("Descrição: ") . converte($descricao), 0, "C", false);
    $pdf->Ln(10);

    $pdf->MultiCell(0, 20, converte("Localização: ") . converte($localizacao), 0, "C", false);
    $pdf->Ln(300);

    $pdf->SetFont("Arial", '', 16);
    $pdf->MultiCell(0, 20, "Formosa GO, 08 de abril de 2024", 0, "C", false);
    $pdf->Ln(20);
   
    $paginaAtual++;
    $pdf->MultiCell(0, 20, converte("Página $paginaAtual de $paginasTotal "), 0, "C", false);
    $pdf->Ln(20);
}

// Saída do PDF para o navegador
$pdf->Output("I", "relatorio-TKFood.pdf");
fp