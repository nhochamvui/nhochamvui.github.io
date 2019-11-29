<?php
$controllers = array(
    'pages' => ['home', 'food', 'cart', 'admin', 'error'],
    'accounts' => ['login', 'logout', 'showLogin'],
    'foods' => []
);

$upClass = ucwords($controller) . 'Controller';

include_once './app/controllers/' . $controller . 'Controller.php';
/* controller naming rule: nameController.php*/

$controller = new $upClass; //new controller object
$controller->{$action}(); //call controller method
?>