<?php
    class Connection {
        
        private $dns = 'mysql:host=localhost;dbname=vinculacrm';
        private $user = 'root';
        private $pass = '';
        private $pdo;

        public function __construct(){
            session_start();
            $this->pdo = new PDO($this->dns , $this->user , $this->pass);
        }

        public function getConnection(){
            return $this->pdo;
        }
    }

    $conn = new Connection();
?>