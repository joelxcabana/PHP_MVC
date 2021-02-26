<?php

class Conection{
    private $conn;

    public function __construct(){
       $this->conn = new mysqli('localhost','root','root','php_mvc');
    }

    public function getUsers(){
        $query =  $this->conn->query("SELECT * FROM user");

        $result = [];

        $i = 0;
        while($fila = $query->fetch_assoc()){
            $result[$i] = $fila;
            $i++;
        }
        return $result;
    }

}

?>