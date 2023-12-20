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
$id = $_POST['id'];

// Delete data from the database
$sql = "DELETE FROM notes WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Note deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
