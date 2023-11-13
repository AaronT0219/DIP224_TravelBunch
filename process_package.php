<?php
// Database connection
$mysqli = new mysqli("localhost", "root", "", "merchant");

// Check for database connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get data from the form
$destination = $_POST['destination'];
$transportation = $_POST['transportation'];
$pax = $_POST['pax'];
$price = $_POST['price'];

// Insert data into the database
$sql = "INSERT INTO Merc_Package (destination, transportation, pax, price) VALUES ('$destination', '$transportation', $pax, $price)";

if ($mysqli->query($sql) === true) {
    echo "Package created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
