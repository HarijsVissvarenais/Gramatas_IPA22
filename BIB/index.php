<?php 

// dd($_SERVER["REQUEST_URI"]);
$route = parse_url($_SERVER["REQUEST_URI"])["path"];


// if($route == '/') {
//     require "controllers/index.php";
// }
//switch ir if bet labaks 
switch ($route) {
    case '':
    case '/':
        require "controllers/index.php";
        break;
    
    default:
        echo "404 ERROR";
        break;
}