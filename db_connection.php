<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "inventory";
$conectionStatus = "";

$db = mysqli_connect($server, $username, $password, $db_name);

if ($db) {
    $conectionStatus = "Connected!";
} else {
    $conectionStatus = "Not Connected!";
}
