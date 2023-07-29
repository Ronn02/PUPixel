<?php

// Get the environment variables from the .env.text file.
$hostname = getenv('DATABASE_HOSTNAME');
$username = getenv('DATABASE_USERNAME');
$password = getenv('DATABASE_PASSWORD');
$database = getenv('DATABASE_DATABASE');

// Create a connection to the database.
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Do something with the database connection.

?>
