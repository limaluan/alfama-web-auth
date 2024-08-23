<?php

function throwError($mensagem, $codigo = 500) {
    http_response_code($codigo); // Define o código de status HTTP
    echo json_encode(['success' => false, 'message' => $mensagem]);
    exit; // Encerra a execução do script
}
