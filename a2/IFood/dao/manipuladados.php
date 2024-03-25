<?php
    include_once("conexao.php");
    class ManipulaDados extends Conexao{
        // insert into tb_usuario (id, nome) values(1,Ana);
        //                          $fields     $dados
        // Se eu quiser dar update em algo vou usar o fieldPK, que no caso vai ser o ID e o valor novo que quero colocar. 
        private $table, $fields, $dados, $fieldPk, $valuePk;

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
        public function getFieldPk(){
            return $this->fieldPk;
        }
        public function setFieldPk($pk){   
            $this->fieldPk= $pk;
        }
        public function getValuePk(){
            return $this->valuePk;
        }
        public function setValuePk($vpk){   
            $this->valuePk= $vpk;
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
        public function getAllDataById($id){
         
            $this->sql = "SELECT * FROM $this->table WHERE $this->fieldPk='$id'";
            $this->qr = self::execSQL($this->sql);

            $dados = array();
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
    public function update(){
        $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldPk = '$this->valuePk'";
        if(self::execSQL($this->sql)){
            $this->status = "Alterado com Sucesso!!";
        }
        else{
            $this->status = "Erro ao alterar na tabela".$this->table." ".mysqli_error($this->connect());
        }

    }
    public function delete(){
        $this->sql = "DELETE FROM $this->table WHERE $this->fieldPk = '$this->valuePk'";
        if(self::execSQL($this->sql)){
            $this->status = "Excluído com Sucesso!!";
        }
        else{
            $this->status = "Erro ao deletar tabela".$this->table." ".mysqli_error($this->connect());
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