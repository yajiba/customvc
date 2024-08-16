<?php
// Define your custom routes
$router->addRoute('GET', '/', 'HomeController', 'index');

$router->addRoute('GET', 'user', 'UserController', 'index');
$router->addRoute('GET', 'user/:id', 'UserController', 'userbyID');
$router->addRoute('GET', 'userlist', 'UserController', 'list_of_users');

?>