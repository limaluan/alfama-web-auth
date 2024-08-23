<?php
include '../db_connection.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = password_hash($mysqli->real_escape_string($_POST['password']), PASSWORD_BCRYPT);
    
    $sql_query = "INSERT INTO users (full_name, email, password) VALUES ('$name','$email','$password')";
    $sql_code = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);
} else {
    print_r('Veio nada man');
}

$mysqli->close();
?>