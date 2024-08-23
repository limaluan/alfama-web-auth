<?php
include '../db_connection.php';
include '../error_handler.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $name = $mysqli->real_escape_string($data['name']);
    $email = $mysqli->real_escape_string($data['email']);
    $password = password_hash($mysqli->real_escape_string($data['password']), PASSWORD_BCRYPT);
    $picture = $data['picture'];

    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $sql_result = $stmt->get_result();

    if (!isset($_SESSION)) {
        session_start();
    }
    
    if ($sql_result->num_rows > 0) {
        $usuario = $sql_result->fetch_assoc();

        unset($usuario['password']);
        $_SESSION['user'] = $usuario;
    } else {
        $sql_query = "INSERT INTO users (full_name, email, password, image_url) VALUES ('$name','$email','$password','$picture')";
        $sql_result = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);

        $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $sql_result = $stmt->get_result();

        $usuario = $sql_result->fetch_assoc();

        unset($usuario['password']);
        $_SESSION['user'] = $usuario;
    }
} else {
    print_r('Dados inválidos');
}

$mysqli->close();
?>