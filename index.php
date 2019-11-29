<?php
require_once('connection.php');
// $db = DB::createConnection();
if (isset($_GET['c'])) {
    $controller = $_GET['c'];
    echo $controller;
    if (isset($_GET['a'])) {
        $action = $_GET['a'];
    } else {
        $action = 'index';
    }
} else {
    $controller = 'pages';
    $action = 'home';
}

require_once('routing.php');