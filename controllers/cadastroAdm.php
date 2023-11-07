<?php
    require_once('../models/Adm.php');

    if(!$_POST['name'] || !isset($_POST['name']) || empty($_POST['name'])){
        header('location: ../views/cadastro.php?error=!');
    }

    if(!$_POST['email'] || !isset($_POST['email']) || empty($_POST['name'])){
        header('location: ../views/cadastro.php?error=!');
    }

    if(!$_POST['password'] || !isset($_POST['password']) || empty($_POST['name'])){
        header('location: ../views/cadastro.php?error=!');
    }

    if(!$_POST['passwordC'] || !isset($_POST['passwordC']) || empty($_POST['name'])){
        header('location: ../views/cadastro.php?error=!');
    }

    $adm->cadastroAdm($_POST['name'] , $_POST['email'] , $_POST['password'] , $_POST['passwordC']);

?>