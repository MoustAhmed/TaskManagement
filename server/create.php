<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes-1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the request
$title = $_POST['title'];
$description = $_POST['description'];

// Insert data into the database
$sql = "INSERT INTO notes (title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Note added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
