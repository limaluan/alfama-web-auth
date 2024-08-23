<?php
include '../db_connection.php';
include '../error_handler.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['email']) || !isset( $data['password'] )) {
        throwError("Preencha todos os dados!", 400);
    }
    
    $email = $mysqli->real_escape_string($data['email']);
    $password = $mysqli->real_escape_string($data['password']);
    
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $sql_result = $stmt->get_result();

    if ($sql_result->num_rows > 0) {
        $usuario = $sql_result->fetch_assoc();

        if (!password_verify($password, $usuario["password"])) {
            throwError("Dados incorretos.", 403);
        }

        if (!isset($_SESSION)) {
            session_start();
        }

        unset($usuario['password']);
        $_SESSION['user'] = $usuario;

        header("Location: /pages/dashboard");
        exit;
    } else {
        throwError("Dados incorretos.", 403);
    }
} else {
    print_r('Requisição não permitida');
}

$mysqli->close();
?>