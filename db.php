<?php

$server = "localhost";
$username = "root";
$password = "";
// $password = "VITfam@2022";
$database = "vitfam-certificate";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Not connect with server");
}