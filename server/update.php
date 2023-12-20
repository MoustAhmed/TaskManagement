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
$title = $_POST['title'];
$description = $_POST['description'];

// Update data in the database
$sql = "UPDATE notes SET title='$title', description='$description' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Note updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
