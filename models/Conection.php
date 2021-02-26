<?php

class Conection{
    private $conn;

    public function __construct(){
       $this->conn = new mysqli('localhost','root','root','php_mvc');
    }

}

?>