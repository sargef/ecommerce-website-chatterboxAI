<?php
$host = "localhost";
$userName = "";
$password = "";
$dbName = "contact_form_info";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
