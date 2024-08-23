<?php
include '../db_connection.php';

function lancarErro($mensagem, $codigo = 500) {
    http_response_code($codigo); // Define o código de status HTTP
    echo json_encode(['success' => false, 'message' => $mensagem]);
    exit; // Encerra a execução do script
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $name = $mysqli->real_escape_string($data['name']);
    $email = $mysqli->real_escape_string($data['email']);
    $password = password_hash($mysqli->real_escape_string($data['password']), PASSWORD_BCRYPT);

    $sql_query = "SELECT * FROM users WHERE users.email = '$email'";
    $sql_result = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($sql_result->num_rows > 0) {
        lancarErro("Este email já está cadastrado.", 409);
    }
    
    $sql_query = "INSERT INTO users (full_name, email, password) VALUES ('$name','$email','$password')";
    $sql_result = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);
} else {
    print_r('Dados inválidos');
}

$mysqli->close();
?>