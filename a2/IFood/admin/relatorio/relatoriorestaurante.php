<?php
require_once("../fpdf186/fpdf.php");
include_once("../../dao/manipuladados.php");

function converte($String)
{
    return iconv("UTF-8","ISO8859-1",$String);
}


$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();





$pdf = new FPDF("P","pt","A4");

$pdf->AddPage();
foreach ($lista as $restaurante) {
// Frente do certificado
$pdf->Image("../img/relatorio/relatorio-capa.png",0,0,$pdf->GetPageWidth(),$pdf->GetPageHeight());
$pdf->Ln(30);

// Recuperando dados
    $id = $restaurante['id'];
$nome = $restaurante['nome'];
$descricao = $restaurante['descricao'];
$localizacao = $restaurante['localizacao'];


$pdf->SetFont("Arial","", 18);
$pdf->SetY(220);
$pdf->SetMargins(20,20,20,20);

$texto = mb_convert_encoding("O relatório do restaurante TKFood deste mês",'ISO-8859-1', 'UTF-8');

$pdf->MultiCell(0,20,$texto,0,"C",false);
$pdf->Ln(10);
$pdf->MultiCell(0,20,$texto,0,"C",false);
$pdf->Ln(20);


$pdf->SetFont("Arial","B",20);
$pdf->MultiCell(0,20,$nome,0,"C",false);
$pdf->Ln(20);

$pdf->SetFont("Arial","",20);
$texto3 = mb_convert_encoding("Nome: ",'ISO-8859-1', 'UTF-8').$nome.mb_convert_encoding("º lugar na categoria ",'ISO-8859-1', 'UTF-8').$descricao.mb_convert_encoding(" de nível ",'ISO-8859-1', 'UTF-8').$localizacao;
$pdf->MultiCell(0,20,$texto3,0,"C",false);
$pdf->Ln(20);

$pdf->MultiCell(0,20,"Formosa GO, 08 de abril de 2024",0,"C",false);
$pdf->Ln(20);
}


$pdf->Output("I","relatorio-TKFood.pdf",true);
?>

