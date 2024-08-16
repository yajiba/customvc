<?php 

require 'core/App.php';
require 'core/Router.php';
require_once 'core/Controller.php';
$router = new Router();

// Include your custom routes from routes.php
require 'routes.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$method = $_SERVER['REQUEST_METHOD'];
/* require 'app/views/template/header.php'; */
$router->route($url,$method);
/* require 'app/views/template/footer.php'; */
?>