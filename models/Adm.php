<?php

    require('./Connection.php');

    class Adm {

        private $conn;
        private $id;
        private $nome;
        
        public function __construct($conn){
            $this->conn = $conn;
        }

    }

    $Adm = new Adm($conn->getConnection());
?>