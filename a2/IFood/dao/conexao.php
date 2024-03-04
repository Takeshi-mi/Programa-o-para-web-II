<?php
// o @ é tipo um aviso, tipo um try catch se tiver vazio
 //$this-> conn @mysqli_connect("localhost:3306:db_tkfood", "root","")
 //Jeito com orientação a objetos
 abstract class Conexao{
    protected $host, $user, $pass, $dba, $conn, $sql, $qr, $data, $status, $totalFields, $error;

    public function __construct() {
        $this->host= "localhost";
        $this->user="root";
        $this->pass = "";
        $this->dba= "db_tkfood";
        self::connect();

    }
    public function connect(){
        $this->conn = @mysqli_connect($this->host, $this->user. $this->pass) or die("<ins><center>Erro ao acessar o banco de dados:</center></ins><br/>". mysqli_error($this->conn));
        $this->dba = @mysqli_select_db($this->conn, $this->dba) or die("<ins><center>Erro na conexão com o banco de dados:</center></ins><br/>". mysqli_error($this->sql));
        mysqli_set_charset($this->conn,'utf8');
        return $this->conn;
    }
    protected function execSQL($sql){
        $this->qr= @mysqli_query($this->conn,$sql) or die("<ins><center>Erro ao executar a query: $sql </center></ins><br/>". mysqli_error($this->conn));
        return $this->qr;
    }
    protected function listQr($qr){
        $this->data=@mysqli_fetch_assoc($qr);
        return $this->data;
    }

    protected function countData($qr){
        $this-> totalFields =@mysqli_num_rows($qr);
        return $this->totalFields;
    }
    
 }
?>