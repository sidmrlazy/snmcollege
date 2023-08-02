<?php
// PRODUCTION
$hostname = "localhost";
$username = "u442267587_snm";
$database = "u442267587_snm";
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