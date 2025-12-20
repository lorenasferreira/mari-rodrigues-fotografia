<?php
$host = "localhost";
$dbname = "database_name";
$user = "user";
$password = "password";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed");
}
