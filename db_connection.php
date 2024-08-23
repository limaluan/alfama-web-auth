<?php
$user = 'root';
$pass = 'alfamaweb';
$database = 'alfama-db';
$host = 'db';

$mysqli = new mysqli($host, $user, $pass, $database);

if ($mysqli->connect_error) {
    die('Falha ao conectar ao banco de dados: ' . $mysqli->connect_error);
}
?>