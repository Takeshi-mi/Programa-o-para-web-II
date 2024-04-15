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

$qtdRestaurantes = $dados->countAllDataFromTable('tb_restaurantes');
$qtdUsuarios = $dados->countAllDataFromTable('tb_usuario');
$qtdComidas = $dados->countAllDataFromTable('tb_comidas');

    $pdf->AddPage();

    // Frente do certificado
    $pdf->Image("../img/relatorio/relatorio-capa.png", 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());
    $pdf->Ln(30);

    $pdf->SetFont("Arial", "B", 18);
    $pdf->SetY(220);
    $pdf->SetMargins(20, 20, 20, 20);

    // Texto principal
    $pdf->MultiCell(0, 20, converte("RELATÓRIO GERAL"), 0, "C", false);
    $pdf->Ln(10);
    $pdf->Ln(20);

    $pdf->SetFont("Arial", "", 15);
    
    $pdf->MultiCell(0, 20, converte("Restaurantes cadastrados: $qtdRestaurantes"), 0, "C", false);
    $pdf->MultiCell(0, 20, converte("Itens no cardápio: $qtdComidas"), 0, "C", false);
    $pdf->MultiCell(0, 20, converte("Usuários administradores cadastrados: $qtdUsuarios"), 0, "C", false);
    $pdf->Ln(20);

    $pdf->SetFont("Arial", "", 16);

$pdf->MultiCell(0, 12, converte("      \t \t RESTAURANTE        |       ITENS NO CARDÁPIO"), 0, "L", false);
$pdf->Ln(10);
$pdf->SetFont("Arial", "", 12);
foreach ($lista as $restaurante){
$id = $restaurante['id'];
$nome = $restaurante['nome'];
$descricao = $restaurante['descricao'];
$localizacao = $restaurante['localizacao'];
$pdf->MultiCell(0, 20, converte("     \t    \t  ") . converte($nome)."\t\t\t\t\t\t                  $qtdComidas   ", 0, "L", false);


}


    $pdf->Ln(20);
    $pdf->SetFont("Arial", '', 16);
    $dataAtual = date("d/m/Y");
    $pdf->MultiCell(0, 20, "Formosa GO, $dataAtual", 0, "C", false);
    $pdf->Ln(20);

    

// Saída do PDF para o navegador
$pdf->Output("I", "relatorio-TKFood.pdf");
