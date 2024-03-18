<?php


class Restaurante
{
    private $id;
    private $nome;
    private $descricao;
    private $telefone;
    private $localizacao;
    private $cidade;
    private $url;

    /*function __construct($id, $descricao, $telefone, $localizacao, $cidade, $url)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->telefone = $telefone;
        $this->localizacao = $localizacao/
        $this->cidade = $cidade;
        $this->url = $url;
    } */


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getLocalizacao()
    {
        return $this->localizacao;
    }
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
