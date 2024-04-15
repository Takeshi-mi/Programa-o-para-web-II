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


$pdf->SetLeftMargin(60);    
// Cabeçalhos da tabela
$pdf->Cell(280, 30, converte("Nome do Restaurante"), 1, 0, "C");
$pdf->Cell(200, 30, converte("Quantidade de Comidas"), 1, 1, "C");

$pdf->SetFont("Arial", "", 14);

foreach ($lista as $restaurante) {
    // Recuperando dados
    $nome = $restaurante['nome'];
    $idRestaurante = $restaurante['id'];

    // Obtendo a quantidade de comidas cadastradas
    $quantidadeComidas = $dados->countAllDataFromTable("tb_comidas");
    //$quantidadeComidas = $dados->countComidasById(restaurante[id]); "WHERE id_restaurante = $idComidaRestaurante");

    // Adicionando os dados à tabela
    $pdf->Cell(280, 20, converte($nome), 1, 0, "L");
    $pdf->Cell(200, 20, converte($quantidadeComidas), 1, 1, "C");
}

$pdf->Ln(20);
$pdf->SetFont("Arial", '', 16);
$dataAtual = date("d/m/Y");
$pdf->MultiCell(0, 20, "Formosa GO, $dataAtual", 0, "C", false);
$pdf->Ln(20);



// Saída do PDF para o navegador
$pdf->Output("I", "relatorio-TKFood.pdf");
