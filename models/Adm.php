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

                header('location: ../index.php?cadastro=success');
            }else{
                header('location: ../views/cadastro.php?error=password');
            }
        }

        public function loginAdm($email , $password){
            $search = $this->conn->query("
                SELECT * FROM USER;
            ");

            $consult = $search->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['login'] = false;

            foreach($consult as $user){
                if($user['EMAIL'] == $email && $user['PASSWORD'] == $password){
                    $_SESSION['id'] = $user['ID'];
                    $_SESSION['name'] = $user['NAME'];
                    $_SESSION['email'] = $user['EMAIL'];
                    $_SESSION['login'] = true;
                }
                break;
            }

            if($_SESSION['login']){
                header('location: ../views/homeAdm.php');
            }else{
                header('location: ../index.php?login=erro');
            }

        }

        public function cadastrarFuncionario($name , $email , $password , $passwordC){
            if($password == $passwordC){
                $this->conn->query("
                    INSERT INTO EMPLOYE(
                        NAME,
                        EMAIL,
                        PASSWORD,
                        ID_USER
                    )VALUES(
                        '{$name}',
                        '{$email}',
                        '{$password}',
                        '{$_SESSION['id']}'
                    );
                ");

                header('location: ../views/cadastroFuncionario.php?cadastro=success');
            }else{
                header('location: ../views/cadastroFuncionario.php?password=!');
            }
        }

        public function getFuncionario(){
            $search = $this->conn->query("
                SELECT * FROM EMPLOYE WHERE ID_USER = {$_SESSION['id']};
            ");

            $consult = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consult;
        }

        public function deletarFuncionario($id){
            $this->conn->query("
                DELETE FROM EMPLOYE WHERE ID = {$id};
            ");

            header('location: ../views/tabelaFuncionarios.php');
        }

        public function getCliente(){
            
        }

    }

    $adm = new Adm($conn->getConnection());
?>