<?php
require_once '../system/Router.php';
require_once '../app/config/database.php';

$url  = $_GET['url'] ?? 'relatorio/index';
$router = new Router($url);
$router->run();

?>