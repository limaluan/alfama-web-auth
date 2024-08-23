<?php
$user = 'root';
$pass = 'alfamaweb';
$database = 'alfama-db';
$host = '172.23.0.2';

$mysqli = new mysqli($host, $user, $pass, $database);

if ($mysqli->connect_error) {
    die('Falha ao conectar ao banco de dados: ' . $mysqli->connect_error);
}
?>