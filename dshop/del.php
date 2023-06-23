<?php
$servername = "SERVERNAME"; 
$username = "USERNAME";
$password = "PASS";
$dbname = "DBNAME";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
} else {
    $id = $_POST['id'];

    $sql_delete = "DELETE FROM TABLE_NAME WHERE id = '$id';";
    $conn->query($sql_delete);

    $conn->close();
}
?>
