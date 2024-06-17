<?php
include_once("../../dao/manipuladados.php");

$manter = new ManipulaDados();
$manter->setTable("tb_comidas");
$manter->setFieldPk("id");

$id = $_POST["txtId"];
$nome = $_POST["txtNome"];
$descricao = $_POST["txtDescricao"];
$estoque = $_POST["txtEstoque"];
$ingredientes = $_POST["txtIngredientes"];
$categoria = $_POST['txtCategoria'];
$url = $_POST['txtUrl'];
$idRestaurante = ['txtIdRestaurante'];
$botao = $_POST['botao'];

switch ($botao) {
    case 'excluir':
        $manter->setValuePk($id);
        $manter->delete();
        echo '<script>  alert("deletado com sucesso!"); </script>';
        header('location: ../principal.php?secao=listarComida');
        break;

    case 'editar':

        echo '
        <!DOCTYPE html>

<head>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    
</head>

<body>
        <div class="container">
        <h1> TKFood Administrador </h1>

    <div class="container border border-warning rounded   ">
        <div class="row">
            <div class="col-md-10 m-4">
    
                <h1 class="text-black-50">Gerenciar de Comidas</h1>
                <hr />
                <form id="formAlterar" method="post" action="#" enctype="multipart/form-data">
                    <input type="hidden" name="txtId" value="' . $id . '"/>
    
                    <div class="form-group">
                        <label for="nome">NOME:</label>
                        <input id="nome" class="form-control" type="text" name="txtNome" value="' . $nome . '"/>
                    </div>
    
                    <div class="form-group">
                        <label for="descricao">DESCRIÇÃO:</label>
                        <textarea id="descricao" class="form-control" rows="3"  name="txtDescricao"> ' . $descricao . ' </textarea>
                    </div>
    
                    <div class="form-group">
                        <label for="estoque">ESTOQUE:</label>
                        <input id="estoque" class="form-control" type="text"  value="' . $estoque . '" name="txtEstoque">
                    </div>
    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="ingredientes">INGREDIENTES:</label>
                            <textarea id="ingredientes" class="form-control" type="text"  value="" name="txtIngredientes"> ' . $ingredientes . ' </textarea>
                        </div>
    
                    <div class="input-group col-md-6 mb-3 mt-3 ">
                        <div class="input-group-append ">
                            <label class="input-group-text" for="inputGroupSelect02">Categoria</label>
                        </div>
                        <select class="custom-select" name="txtCategoria" value="' . $categoria . '" id="inputGroupSelect02">
                            <option selected>'.$categoria.'</option>
                            <option value="Prato Quente">Prato Quente</option>
                            <option value="Prato Frio">Prato Frio</option>
                            <option value="Sobremesa">Sobremesa</option>
                        </select>
                   
                    </div>

                    
    
                    <div class="form-group">
                
                    <p> Imagem atual: </p>
                     <img class="img-fluid " width="200px" src="../../' . $url . '" alt="Imagem do restaurante"/> <br/>
                     <label for="img">IMAGEM:</label> 
                        <input id="img" class="form-control" type="file"  value="' . $url . '"name="arquivo"/>
                        <input type="hidden" name="txtUrl" value="' . $url . '"/> <!-- Campo oculto para manter a URL -->
                    </div>
                 

    
                    <button id="btnEnviar" class="btn btn-success mt-3 mb-5" type="submit" name="botao" value="enviar">Salvar</button>
                    <a  class="btn btn-danger mt-3  ms-2 mb-5" href="../principal.php?secao=listarComida">Descartar alterações</a>
                </form>
    
            </div> <!-- .col-md-6 .m-4 -->
        </div> <!-- .row -->
    </div> <!-- .container -->
    
    </div> <!-- .container principal -->

    </body>
    </html>
    ';

        $manter->setValuePk($id);
        //$manter->update();
        break;
    default:
        header('location: ../principal.php?secao=listarComida');
        echo '<script>  alert("deu ruim "); </script>';
        break;
}
