<?php
// Define your custom routes
$router->addRoute('GET', '/', 'HomeController', 'index');

$router->addRoute('GET', 'user', 'UserController', 'index');
$router->addRoute('GET', 'user/:id', 'UserController', 'userbyID');
$router->addRoute('GET', 'userlist', 'UserController', 'list_of_users');



//Product Routing
$router->addRoute('GET', 'shop', 'ProductController', 'getProducts');
$router->addRoute('GET', 'product/:id', 'ProductController', 'getProductByID');
$router->addRoute('GET', 'category/:cat', 'ProductController', 'getProductbyCat');

//ORDERS
$router->addRoute('GET', 'orders', 'OrderController', 'list');



//API
$router->addRoute('GET', 'api/products', 'APIController', 'getProducts');
$router->addRoute('GET', 'api/product/:id', 'APIController', 'getProductByID');
$router->addRoute('GET', 'api/category/:cat', 'APIController', 'getProductbyCat');

?>