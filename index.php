<?php 
require 'config.php';
require 'core/App.php';
require 'core/Router.php';
require_once 'core/Controller.php';
$router = new Router();

// Include your custom routes from routes.php
require 'routes.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$method = $_SERVER['REQUEST_METHOD'];

$router->route($url,$method);

?>