<?php

    require('./Connection.php');

    class User {

        private $conn;
        private $id;
        private $nome;
        
        public function __construct($conn){
            $this->conn = $conn;
        }

    }

    $user = new User($conn->getConnection());
?>