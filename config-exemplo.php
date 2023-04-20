//arquivo de Exemplo para o config.php (o config.php não vai para o GitHub para não expor as credenciais do banco de dados)

<?php

// Basic connection settings
$databaseHost = 'localhost';
$databaseUsername = 'usuario';
$databasePassword = 'senha';
$databaseName = 'database';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>