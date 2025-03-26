<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "church";

// Create connection
$db_link = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db_link->connect_error) {
    die("Connection failed: " . $db_link->connect_error);
}
?>
