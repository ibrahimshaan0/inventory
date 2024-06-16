<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

require "db_connection.php";

$delete_statue = "";
$id = $_GET["id"];

$query = mysqli_query($db, "DELETE FROM inv_pcs WHERE id = $id");
if ($query) {
    $delete_statue = "Data Deleted!";
}

header("Location: index.php");
