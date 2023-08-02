<?php
// PRODUCTION
$hostname = "localhost";
$username = "u976956619_snm";
$database = "u976956619_snm";
$password = "Darthvader@order66";

// DEVELOPMENT
// $hostname = "localhost";
// $username = "root";
// $database = "snm_college";
// $password = "";

// Validate Connection
$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Error 404: " . $connection->connect_error);
}