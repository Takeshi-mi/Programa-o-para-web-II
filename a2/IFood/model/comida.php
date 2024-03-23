<?php

// neste model vou usar um conceito de get e set com overloading do php

class Comida
{
    private $id;
    private $nome;
    private $descricao;
    private $url;
    private $preco;
    private $estoque;
    private $categoria;
    private $ingredientes;


    function __destruct()
    {
        $this->id = null;
    }

    //get e set com overloading;
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    //Se o usuário digitar no preço um número decimal com vírgula não vai dar erro porque a função já vai converter pra ponto.
    function __get($atributo)
    {
        if ($atributo == 'preco') {
            $preco = str_replace(',', '.', $this->preco);
            return $preco;
        } else {
            return $this->$atributo;
        }
    }
}
