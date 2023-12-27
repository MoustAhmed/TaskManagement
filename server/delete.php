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

$sno = $data['sno'] ?? '';

if (!empty($sno)) {
    $sql = "DELETE FROM notes WHERE sno = '$sno'";

    if ($conn->query($sql) === TRUE) {
        echo "Note deleted successfully";
    } else {
        echo "Error deleting note: " . $conn->error;
    }
} else {
    echo "Invalid request. Sno parameter is missing.";
}

$conn->close();
?>

