<h1 class="bg-primary">Cadastro de restaurantes</h1>

<form method="post" action="controller/InserirRestaurante.php" enctype="multipart/form-data">
<?php //criamos uma Classe InserirRestaurante no Controller ?>

<div class="form-group">
    <label>NOME: </label>
    <input class="form-control"  width="50%" type="text" name="txtRestaurante" required>
</div>
<p>
    <label>DESCRIÇÃO: </label>
    <input type="text" name="txtDescricao" required>
</p>
<p>
    <label>LOCALIZAÇÃO: </label>
    <input type="text" name="txtLocalizacao" required>
</p>
<p>
    <label>CIDADE: </label>
    <input type="text" name="txtCidade" required>
</p>
<p>
    <label>TELEFONE: </label>
    <input type="text" name="txtTelefone" required>
</p>
<p>
    <label>IMAGEM: </label>
    <input type="file" name="arquivo" required>
</p>
<button type="submit" name="enviar" value="enviar" >Enviar</button> 
</form>
