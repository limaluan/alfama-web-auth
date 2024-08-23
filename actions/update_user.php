<?php
include '../db_connection.php';
include '../error_handler.php';

if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (
        !isset($data['email']) || !isset($data['name']) ||
        !isset($data['phone']) || !isset($data['cpf']) ||
        !isset($data['company']) || !isset($data['address'])
    ) {
        throwError("Preencha todos os dados!", 400);
    }

    $email = $mysqli->real_escape_string($data['email']);
    $full_name = $mysqli->real_escape_string($data['name']);
    $phone = $mysqli->real_escape_string($data['phone']);
    $cpf = $mysqli->real_escape_string($data['cpf']);
    $company = $mysqli->real_escape_string($data['company']);
    $address = $mysqli->real_escape_string($data['address']);

    $sql_query = "SELECT * FROM users WHERE users.email = '$email'";
    $sql_result = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($sql_result->num_rows > 0 && $email != $_SESSION['user']['email']) {
        throwError("Este email já está cadastrado.", 409);
    }

    $stmt = $mysqli->prepare("UPDATE users SET email = ?, full_name = ?, phone = ?, cpf = ?, company = ?, address = ? WHERE id = ?");
    $stmt->bind_param("sssssss", $email, $full_name, $phone, $cpf, $company, $address, $_SESSION['user']['id']);
    $stmt->execute();

    $sql_query = "SELECT * FROM users WHERE users.email = '$email'";
    $sql_result = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);

    $usuario = $sql_result->fetch_assoc();
    unset($usuario['password']);
    $_SESSION['user'] = $usuario;
} else {
    print_r('Requisição não permitida');
}

$mysqli->close();
?>