<?php
require_once(__DIR__ . "/database.php");
session_start();
session_regenerate_id(true);

$path = "/guerra-cookbook/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "cookbook_db";
/*checks if the database is connection , if not then it will set it*/
if(!isset($_SESSION["connection"])){
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}