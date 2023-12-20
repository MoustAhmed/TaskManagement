<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes-1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    echo "Hello";

}else{
    echo "doesnt work";
}
?>