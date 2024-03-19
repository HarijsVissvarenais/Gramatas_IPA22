<?php 

$route = parse_url($_SERVER["REQUEST_URI"])["path"];

switch ($route) {
    case '':
    case '/':
        require "controllers/index.php";
        break;
    
    default:
        echo "404 ERROR";
        break;
}