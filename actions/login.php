<?php
include '../db_connection.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $sql_result = $stmt->get_result();

    if ($sql_result->num_rows > 0) {
        $usuario = $sql_result->fetch_assoc();

        if (!password_verify($password, $usuario["password"])) {
            die("Credenciais inválidas");
        }

        if (!isset($_SESSION)) {
            session_start();
        }

        unset($usuario['password']);
        $_SESSION['user'] = $usuario;

        header("Location: /pages/dashboard");
        exit;
    }
    $stmt->close();
} else {
    print_r('Dados inválidos');
}

$mysqli->close();
?>