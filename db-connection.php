<?php
$servername = "localhost";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "PDS_Hanze";

// Maak een databaseverbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding met de database is mislukt: " . $conn->connect_error);
}
