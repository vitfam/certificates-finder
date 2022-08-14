<?php

$server = "localhost";
$username = "root";
$password = "0000";
$database = "vitfam-certificate";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Not connect with server");
}