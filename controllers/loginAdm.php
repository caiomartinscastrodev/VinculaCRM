<?php
    require_once('../models/Adm.php');

    $adm->loginAdm($_POST['email'] , $_POST['password']);

?>