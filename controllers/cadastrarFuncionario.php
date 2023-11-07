<?php
    require_once('../models/Adm.php');

    $adm->cadastrarFuncionario($_POST['name'] , $_POST['email'] , $_POST['password'] , $_POST['passwordC']);

?>