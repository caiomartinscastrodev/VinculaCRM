<?php

    require_once('Connection.php');

    class Adm {

        private $conn;
        private $id;
        private $nome;
        
        public function __construct($conn){
            $this->conn = $conn;
        }

        public function cadastroAdm($name , $email , $password , $passwordC){
            if($password == $passwordC){
                $this->conn->query("
                    INSERT INTO USER(
                        NAME,
                        EMAIL,
                        PASSWORD
                    )VALUES(
                        '{$name}',
                        '{$email}',
                        '{$password}'
                    );
                ");

                header('location: ../views/cadastro.php?cadastro=success');
            }else{
                header('location: ../views/cadastro.php?error=password');
            }
        }

        public function loginAdm($email , $password){
            $search = $this->conn->query("
                SELECT * FROM USER;
            ");

            $consult = $search->fetchAll(PDO::FETCH_ASSOC);

            $login = false;

            foreach($consult as $user){
                if($user['EMAIL'] == $email && $user['PASSWORD'] == $password){
                    $login = true;
                }
                break;
            }

            if($login){
                header('location: ../views/homeAdm.php');
            }else{
                header('location: ../index.php?login=erro');
            }

        }

    }

    $adm = new Adm($conn->getConnection());
?>