<?php
if (!isset($_SESSION)) {
    session_start();
};
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
    <title>Meu Perfil | Alfama Web</title>
</head>

<body>
    <h1>Dashvboard <?php print_r($_SESSION['user']['full_name']); ?></h1>
    <script src="../../assets/libs/bootstrap-5.3.3/js/bootstrap.js"></script>
</body>

</html>