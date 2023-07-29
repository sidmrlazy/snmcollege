<?php
// PRODUCTION
// $hostname = "localhost";
// $username = "u442267587_datam8";
// $database = "u442267587_datam8";
// $password = "Datam8123!@#123";

// DEVELOPMENT
$hostname = "localhost";
$username = "root";
$database = "snm_college";
$password = "";

// Validate Connection
$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Error 404: " . $connection->connect_error);
}