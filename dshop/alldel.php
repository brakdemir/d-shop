<?php
$servername = "SERVERNAME"; 
$username = "USERNAME";
$password = "PASS";
$dbname = "DBNAME";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);   
} else {

    $sql = "DELETE FROM TABLE_NAME WHERE id > -1;";
    $conn->query($sql);

    $sql = "SELECT * FROM shop";
    $result = $conn->query($sql);

    $conn->close(); 
}

?>
