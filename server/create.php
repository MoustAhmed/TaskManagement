<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes-1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read JSON data from the request body
$json_data = file_get_contents("php://input");
$data = json_decode($json_data, true);

$title = $conn->real_escape_string($data['title'] ?? '');
$description = $conn->real_escape_string($data['description'] ?? '');

$sql = "INSERT INTO notes (title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    // Delete records with empty title and description
    $deleteSql = "DELETE FROM notes WHERE title = '' AND description = ''";
    $conn->query($deleteSql);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
