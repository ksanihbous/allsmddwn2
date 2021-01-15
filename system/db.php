<?php
$database["host"] = "localhost";
$database["name"] = "allsosmed1234";
$database["user"] = "allsosmed1234";
$database["password"] = "allsosmed1234";
require_once __DIR__ . "/../admin/classes/database.class.php";
database::connect("mysql:host=" . $database["host"] . ";dbname=" . $database["name"] . ";charset=utf8mb4", $database["user"], $database["password"]);
