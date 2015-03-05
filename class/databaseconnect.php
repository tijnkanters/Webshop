<?php
$servername = "databases.aii.avans.nl";
$username = "trkanter";
$password = "Ab12345";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {

	die("Connection failed: " . $conn->connect_error);
}

?>