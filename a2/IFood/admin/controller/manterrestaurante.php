<?php
include_once("../../dao/manipuladados.php");

$manter = new ManipulaDados();
$manter-> setTable("tb_restaurantes");
$manter->setFieldPk("id");

$id = $_POST["txtId"];
$botao = $_POST['botao'];


switch ($botao) 
{
    case 'excluir':
        $manter->setValuePk($id);
        $manter->delete();
        echo '<script>  alert("deletado com sucesso!"); </script>';
        header('location: ../principal.php?secao=listarRestaurantes');
        break;

    case 'editar':
        $manter->setValuePk($id);   
        $manter->update();
        break;
    default:
    echo '<script>  deu ruim "); </script>';
    break;

}

