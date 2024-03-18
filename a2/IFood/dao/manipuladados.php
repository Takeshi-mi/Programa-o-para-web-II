<?php
    include_once("conexao.php");
    class ManipulaDados extends Conexao{
        private $table, $fields, $dados;

        public function getTable(){
            return $this->table;
        }
        public function setTable($t){   
            $this->table= $t;
        }
        public function getFields(){
            return $this->fields;
        }
        public function setFields($f){   
            $this->fields= $f;
        }
        public function getDados(){
            return $this->dados;
        }
        public function setDados($d){   
            $this->dados= $d;
        }
        public function getAllDataTable(){
            $dados = array();
            $this->sql = "SELECT * FROM $this->table";
            $this->qr = self::execSQL($this->sql);

            while($row = self::listQuery($this->qr)){
                array_push($dados,$row);
            }
            return $dados;

        }
        public function validarLogin($login, $password){
            $this->sql = "SELECT * FROM tb_usuario WHERE nome = '$login' and senha = '$password'";
            $this->qr = self::execSQL($this->sql);
            $linhas = self::countData($this->qr);
            return $linhas;
        }
        public function insert(){
            $this->sql = "INSERT INTO $this->table($this->fields) VALUES ($this->dados)";
            if(self::execSQL($this->sql)){
                $this->status= "Cadastrado com sucesso!!";
        }
        else{
            $this->status = "Erro ao cadastrar".mysqli_error($this->connect());
        }
    }
    public function getStatus(){
        return $this->status;
    }
    public function getSQL(){
        return $this->sql;
    }
}
?>