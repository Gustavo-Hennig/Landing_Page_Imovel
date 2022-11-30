<?php
    
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_site';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
/* 
    if($conexao->connect_errno){
        echo "Erro ao conectar ao Banco";
    }
    else{
        echo "Conexão efetuada com suceso";
    }*/
?>
