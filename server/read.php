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

$sql = "SELECT sno, title, description FROM notes WHERE title IS NOT NULL AND description IS NOT NULL";

$result = $conn->query($sql);

$notes = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $notes[] = array(
            'sno' => $row["sno"],
            'title' => $row["title"],
            'description' => $row["description"]
        );
    }
}

echo json_encode($notes);

$conn->close();
?>
