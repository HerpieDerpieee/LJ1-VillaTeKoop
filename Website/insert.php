<?php
// Retrieve the data from the AJAX request
$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$bod = $_POST["bod"];
$email = $_POST["email"];
$tnum = $_POST["tnum"];

$name = $fname . " " . $lname;

// Attempt to parse integers from the id and bod values
$id = intval($id);
$bod = intval($bod);

// Insert the data into the database using mysqli or any other database library
// Replace the following lines with your actual database insertion code
$servername = "localhost";
$username = "VILLA-DB-BEROEPS";
$password = "SuperSterkWachtwoord";
$dbname = "89618_DB_BEROEPS";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO BIEDEN (villaID, name, price, email, phone) VALUES ($id, '$name', $bod, '$email', '$tnum')";

if ($conn->query($sql) === true) {
    echo "success";
} else {
    echo "error: " . $conn->error;
}

$conn->close();
?>