<?php
define('DB_USER', 'usuario');
define('DB_PASS', 'senha');
define('DB_CONN', 'localhost/orcl');

function getOracleConnection() {
    $conn = oci_connect(DB_USER, DB_PASS, DB_CONN, 'AL32UTF8');
    if (!$conn) {
        $e = oci_error();
        die("Erro ao conectar: " . $e['message']);
    }
    return $conn;
}
?>