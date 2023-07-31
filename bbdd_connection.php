<?php

    $host = "localhost";
    $bbdd = "inimmo";
    $bbddUser = "Inimmo11B";
    $bbddpass = "1234";

    $bbddTable = "usuario";

    //error_reporting(0);

    $connection = new mysqli($host,$bbddUser,$bbddpass,$bbdd);

    if($connection->connect_errno){
        echo "No se logró la conexión";
        exit();
    }
?>
