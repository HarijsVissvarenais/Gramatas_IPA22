<?php require "Views/components/header.php" ?>
<link rel="stylesheet" href="CSS/index.css"/>
<div id="center">
    <div id="box">
<?php
$config = require "config.php";
require "database.php";

echo "Hi, IPa22 👋";

$db = new Database($config);
// $posts = $db->execute("SELECT * FROM posts");

echo "<h1>Posts: </h1>";
// dd($posts);

$query_string = "SELECT * FROM posts";
$query_string2 = "SELECT * FROM categories";

$params = [];
$params2 = [];

if(isset($_GET["id"]) && $_GET["id"] != "") {
    $query_string .= " WHERE id=:id"; 
    $params = [":id" => $_GET["id"]];
    //".=" panem ieprieksejo vertibu un pieliek where klat
}
if(isset($_GET["name"]) && $_GET["name"] != "") {
    $query_string2 .= " WHERE name=:name"; 
    $params2 = [":name" => $_GET["name"]];
    //".=" panem ieprieksejo vertibu un pieliek where klat
}
$posts = $db->execute($query_string, $params);
$categories = $db->execute2($query_string2, $params2);
//ar IF statement
// if (isset($_GET["name"])) {
//     echo "<input  name='name' value='" .$_GET['name']  ."'/>";
// }else {
//     echo "<input  name='name' value='" ."'/>";
// }
            //is?         if yes        if no
//(isset($_GET["name"]) ? $_GET['name'] : '')

//Ternary Operator

//<input  name='name' value='" .<?php (isset($_GET["name"]) ? $_GET['name'] : '') '/>
//Null coalesing operator !!!!!!!!
       //is?,is       if no
//($_GET["name"] ?? null)

require "views/index.view.php";

?>