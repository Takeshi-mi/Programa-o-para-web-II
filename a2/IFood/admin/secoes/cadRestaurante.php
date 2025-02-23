<div class="container">
    <div class="row">
        <div class="col-md-6 m-4">

            <h1 class="text-black-50">Cadastro de restaurantes</h1>
            <hr />
            <form id="formRestaurante" method="post" action="controller/InserirRestaurante.php" enctype="multipart/form-data">
                <?php //criamos uma Classe InserirRestaurante no Controller 
                ?>

                <div class="form-group">
                    <label for="nome">NOME:</label>
                    <input id="nome" class="form-control" type="text" name="txtRestaurante" required>
                </div>

                <div class="form-group">
                    <label for="descricao">DESCRIÇÃO:</label>
                    <textarea id="descricao" class="form-control" rows="2" name="txtDescricao" required></textarea>
                </div>

                <div class="form-group">
                    <label for="localizacao">LOCALIZAÇÃO:</label>
                    <input id="localizacao" class="form-control" type="text" name="txtLocalizacao" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cidade">CIDADE:</label>
                        <input id="cidade" class="form-control" type="text" name="txtCidade" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telefone">TELEFONE:</label>
                        <input id="telefone" class="form-control" type="text" name="txtTelefone" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="img">IMAGEM:</label>
                    <input id="img" class="form-control" type="file" name="arquivo" required>
                </div>

                <button id="btnEnviar" class="btn btn-success mb-5" type="submit" name="enviar" value="enviar">Enviar</button>
            </form>

        </div> <!-- .col-md-6 .m-4 -->
    </div> <!-- .row -->
</div> <!-- .container -->
