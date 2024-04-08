<div class="container ">
    <div class="row">
        <div class="col-md-6 m-4">

            <h1 class="text-black-50">Decaimento em usina nuclear em Angra dos reis</h1>
            <hr />
<p>Existem em operação no Brasil duas usinas nucleares em Angra dos Reis, as quais os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que esse material perde 15% de sua massa a cada 30 segundos, construa um algoritmo em PHP que imprima o tempo necessário para que a massa desse material seja menor que 10 gramas.</p>

            <form id="formCalculo" method="post" action="questao01-CalcularMassa.php">

                <div class="form-group">
                    <label for="qtd">Digite a quantidade de massa em kg:</label>
                    <input id="qtd" class="form-control" type="number" name="qtd" required>
                </div>


<?php

$massa = @$_POST['qtd'] *1000;
$tempo = 0;
while($massa >=10){
    $massa -= ($massa*0.15);
    $tempo += 30;
}
echo "O tempo em segundos é $tempo"


?>
               