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


    function __construct($nome)
    {
        $this->nome = $nome;
    }
    function __destruct()
    {
        $this->id = null;
    }

    //get e set com overloading;
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    function __get($atributo)
    {
        return $this->$atributo;
    }
}
