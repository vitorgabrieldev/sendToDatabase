<?php

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'form_vitor';

    $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    } else
    {
        echo "DATABASE : Connect...";
    }

    

?>