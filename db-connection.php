<?php
$servername = "localhost";
$username = "root";
$password = "Naomi2211!";
$dbname = "PDS_Hanze";

// Maak een databaseverbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding met de database is mislukt: " . $conn->connect_error);
}
